<?php

// получение данных с формы
$Name = $_POST['Name'];

$pass = $_POST['pass'];


//обработка и преобразование данных
$Name = htmlspecialchars($Name); //преобразование символов в сущности

$pass= htmlspecialchars($pass);


$Name = urldecode($Name); //декодирование URL

$pass= urldecode($pass);


$Name = trim($Name); //удаление лишних пробелов

$pass= trim($pass);

$mysql = new mysqli('localhost', 'cs07629_1', '3RRyVjpSrprW', 'cs07629_1'); //задает подключение в БД 1 параметр - хост, 2 - логин, 3 - пароль, 4 - название БД

$result = $mysql->query("SELECT * FROM `users` WHERE `Name` = '$Name' AND `pass` = '$pass'"); //обработка логина и пароля

$user = $result->fetch_assoc();
if(count($user) == 0) {
    echo "Такой пользователь не найден";
    exit();
} 

setcookie('user', $user['name'], time()+ 3600, "/");

if($_COOKIE['user'] == ''){
    header('Location: ../index.html');
}
else {
    header('Location: ../authed_admin.php');
}

$mysql->close(); //завершение выполнения функции. 

header('Location: ../authed_admin.php');

exit();
?>
