<?php
$title = trim(filter_var($_POST['title'], FILTER_SANITIZE_STRING));
$description = trim(filter_var($_POST['description'], FILTER_SANITIZE_STRING));
$price = trim(filter_var($_POST['price'], FILTER_SANITIZE_STRING));
$img = trim(filter_var($_POST['img'], FILTER_SANITIZE_STRING));

$error = '';
if (strlen($title) <= 5)
    $error = 'Введіть заголовок';
else if (strlen($title) >= 40)
    $error = 'Заголовок задовгий';
else if(strlen($price) <= 5)
    $error = 'Введіть ціну товара';
else if(strlen($price) >= 20)
    $error = 'Поле ціни товару задовге';
else if(strlen($img) <= 5)
    $error = 'Введіть шляш або посилання на фото товару';

if ($error != ''){
    echo $error;
    exit();
}

require 'connectDb.php';
$sql = 'INSERT INTO goods(img, title, description, price) VALUES(?,?,?,?)';
$query = $pdo->prepare($sql);
$query->execute([$img, $title, $description, $price]);
echo true;