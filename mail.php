<?php
$mailheaders = "Content-type: text/html; charset=UTF-8 \r\n";
$mailheaders .= "From: Starsbot.ru";
$mailheaders .= "Reply-To: Starsbot.ru";
$messeng ="<h1>Данные Пользователя</h1>
<p>Имя пользователя:". $_POST["name"] . "</p>
<p>Телефон пользователя:" . $_POST["phone"] . "</p>
<p>Почта пользователя:" . $_POST["email"] . "</p>
<p>Город пользователя:" . $_POST["sity"] . "</p>

";
$messengClient ="<h1>Данные нового пользователя</h1>
<p>Ваше Имя:". $_POST["name"] . "</p>
<p>Ваш Телефон :" . $_POST["phone"] . "</p>
<p>Ваша Почта :" . $_POST["email"] . "</p>
<p>Ваш Город :" . $_POST["sity"] . "</p>

";
$messengSMS = "<h1>Ты сделал первый шаг!</h1>
<p>Переходи по ссылке и следуй инструкциям! <a href=\"t.me/StarsFamilyBot\">t.me/StarsFamilyBot</a></p>
";
mail($_POST['email'],"Регистрация в сервисе",$messengClient,$mailheaders);
mail("64F3CA6C-290C-45A5-4779-A012E9F7C621". $_POST["phone"] ."@sms.ru","Form Test site",$messengSMS,$mailheaders);
mail('stars2.0@ya.ru',"Регистрация в сервисе",$messeng,$mailheaders);
header("Location: thanks.html");
exit;

?>