<?php

// получение данных с формы
$Name = $_POST['Name'];
$Phone = $_POST['Phone'];
$PromoCode = $_POST['PromoCode'];
//$Review = $_POST['Review'];

//обработка и преобразование данных
$Name = htmlspecialchars($Name); //преобразование символов в сущности
$Phone= htmlspecialchars($Phone);
$PromoCode= htmlspecialchars($PromoCode);
//$Review= htmlspecialchars($Review);

$Name = urldecode($Name); //декодирование URL
$Phone= urldecode($Phone);
$PromoCode= urldecode($PromoCode);
//$Review= urldecode($Review);

$Name = trim($Name); //удаление лишних пробелов
$Phone= trim($Phone);
$PromoCode= trim($PromoCode);
//$Review= trim($Review);


if (mail("romanshablio@icloud.com",
            "Новый отзыв!",
            "Имя: ".$Name."\n".
            "Телефон: ".$Phone."\n".
            "Промо-код: ".$PromoCode."\n",
            //"Отзыв: ".$Review."\n",
            "From: promo@hitryenot.ru \r\n")
            ) {
                header('Location: http://cs07629.tmweb.ru/'); //перенаправиление на главную страницу
                
            }
            else {
                echo('Есть ошибки, проверьте все ли обязательные поля заполнены.');
            }
exit();
?>
