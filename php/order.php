<?php

// получение данных с формы
$Name = $_POST['Name'];
$Phone = $_POST['Phone'];
$PromoCode = $_POST['PromoCode'];
$GoodnessRating = $_POST['GoodnessRating'];
$SpeedRating = $_POST['SpeedRating'];
$ProductQuality = $_POST['ProductQuality'];
$Сleanliness = $_POST['Сleanliness'];
$Review = $_POST['Review'];

//обработка и преобразование данных
$Name = htmlspecialchars($Name); //преобразование символов в сущности
$Phone= htmlspecialchars($Phone);
$PromoCode= htmlspecialchars($PromoCode);
$GoodnessRating= htmlspecialchars($GoodnessRating);
$SpeedRating= htmlspecialchars($SpeedRating);
$ProductQuality= htmlspecialchars($ProductQuality);
$Сleanliness= htmlspecialchars($Сleanliness);
$Review= htmlspecialchars($Review);

$Name = urldecode($Name); //декодирование URL
$Phone= urldecode($Phone);
$PromoCode= urldecode($PromoCode);
$GoodnessRating= urldecode($GoodnessRating);
$SpeedRating= urldecode($SpeedRating);
$ProductQuality= urldecode($ProductQuality);
$Сleanliness= urldecode($Сleanliness);
$Review= urldecode($Review);

$Name = trim($Name); //удаление лишних пробелов
$Phone= trim($Phone);
$PromoCode= trim($PromoCode);
$GoodnessRating= trim($GoodnessRating);
$SpeedRating= trim($SpeedRating);
$ProductQuality= trim($ProductQuality);
$Сleanliness= trim($Сleanliness);
$Review= trim($Review);


if (mail("coffeepromo@yandex.ru",
            "Новый отзыв!",
            "Имя: ".$Name."\n".
            "Телефон: ".$Phone."\n".
            "Промо-код: ".$PromoCode."\n".
            "Рейтинг доброжелательности бариста: ".$GoodnessRating."\n".
            "Рейтинг скорости обслуживания: ".$SpeedRating."\n".
            "Оценка качества продуктов: ".$ProductQuality."\n".
            "Оценка чистоты заведения: ".$Сleanliness."\n".
            "Отзыв: ".$Review,
            "From: mailserver@mail.ru \r\n")
            ) {
                header('Location: ../sent.html'); //перенаправиление на другую страницу если все успешно                
            }
            else {
            	echo('Есть ошибки, проверьте все ли обязательные поля заполнены.'); // вывод сообщения о провале если все неуспешно.
            }

$mysql = new mysqli('localhost', 'cs07629_1', '3RRyVjpSrprW', 'cs07629_1'); //задает подключение в БД 1 параметр - хост, 2 - логин, 3 - пароль, 4 - название БД
$mysql->query("INSERT INTO `users` (`Name`, `Phone`, `PromoCode`, `GoodnessRating`, `SpeedRating`, `ProductQuality`, `Сleanliness`, `Review`) VALUES('$Name', '$Phone', '$PromoCode', '$GoodnessRating', '$SpeedRating', '$ProductQuality', '$Сleanliness', '$Review')"); //создаю запрос на добавление данных в таблицу users значениями из полей.
$mysql->close(); //завершение выполнения функции. 
exit();
?>
