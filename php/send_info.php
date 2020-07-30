<?php
    $name = $_POST['name'];
    $tel = $_POST['tel'];

    $name = htmlspecialchars($name);
    $tel = htmlspecialchars($tel);

    $name = urldecode($name);
    $tel = urldecode($tel);

    $name = trim($name);
    $tel = trim($tel);

    if (mail("info@rcteam54.ru", "Заказ с сайта", "Имя: ".$name."\nТелефон: ".$tel)) { 
        $link = '../index.html';
        header ('Location: ' .$link);
    }
?>