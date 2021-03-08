<?php

// получение данных с формы
$Name = $_POST['Name'];
$Phone = $_POST['Phone'];
$PromoCode = $_POST['PromoCode'];
$Review = $_POST['Review'];

//обработка и преобразование данных
$Name = htmlspecialchars($Name); //преобразование символов в сущности
$Phone= htmlspecialchars($Phone);
$PromoCode= htmlspecialchars($PromoCode);
$Review= htmlspecialchars($Review);

$Name = urldecode($Name); //декодирование URL
$Phone= urldecode($Phone);
$PromoCode= urldecode($PromoCode);
$Review= urldecode($Review);

$Name = trim($Name); //удаление лишних пробелов
$Phone= trim($Phone);
$PromoCode= trim($PromoCode);
$Review= trim($Review);


if (mail("romanshablio@icloud.com",
            "Новый отзыв!",
            "Имя: ".$Name."\n".
            "Телефон: ".$Phone."\n".
            "Промо-код: ".$PromoCode."\n",
            "Отзыв: ".$Review."\n",
            "From: promo@hitryenot.ru \r\n")
            ) {
                header('Location: ../sent.html'); //перенаправиление на главную страницу если все успешно
                
            }
            else {
            	echo('Есть ошибки, проверьте все ли обязательные поля заполнены.'); // вывод сообщения о провале если все неуспешно.
            }

$mysql = new mysqli('localhost', 'cs07629_1', '3RRyVjpSrprW', 'cs07629_1'); //задает подключение в БД 1 параметр - хост, 2 - логин, 3 - пароль, 4 - название БД
$mysql->query("INSERT INTO `users` (`Name`, `Phone`, `PromoCode`, `Review`) VALUES('$Name', '$Phone', '$PromoCode', '$Review')"); //создаю запрос на добавление данных в таблицу users значениями из полей.
$mysql->close(); //завершение выполнения функции. 
exit();
?>
