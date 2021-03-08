<?php
$mysql = new mysqli('localhost', 'cs07629_1', '3RRyVjpSrprW', 'cs07629_1'); //задает подключение в БД 1 параметр - хост, 2 - логин, 3 - пароль, 4 - название БД

$get = $mysql->query("SELECT `ID`, `Name`, `Phone`, `PromoCode`, `Review` FROM `users` WHERE NOT (Name='Admin')");


?>