<?php
$goodsId = trim(filter_var($_POST['goodsId'], FILTER_SANITIZE_NUMBER_INT));
$title = trim(filter_var($_POST['title'], FILTER_SANITIZE_STRING));
$price = trim(filter_var($_POST['price'], FILTER_SANITIZE_STRING));
$nameInfo = trim(filter_var($_POST['nameInfo'], FILTER_SANITIZE_STRING));
$phone = trim(filter_var($_POST['phone'], FILTER_SANITIZE_STRING));
$delivery = trim(filter_var($_POST['delivery'], FILTER_SANITIZE_STRING));
$payment = trim(filter_var($_POST['payment'], FILTER_SANITIZE_STRING));
$city = trim(filter_var($_POST['city'], FILTER_SANITIZE_STRING));
$postDepartment = trim(filter_var($_POST['postDepartment'], FILTER_SANITIZE_STRING));
$comment = trim(filter_var($_POST['comment'], FILTER_SANITIZE_STRING));

$error = '';
if (strlen($nameInfo) <= 5)
    $error = 'Введіть ПІП';
else if (strlen($phone) >= 14)
    $error = 'Новірний формат номера телефона';
else if(strlen($phone) == 0)
    $error = 'Введіть номер телефона';
else if(strlen($phone) < 13)
    $error = 'Введість коректний номер телефона';
else if($delivery == 'Виберіть тип доставки')
    $error = 'Виберіть тип доставки';
else if($payment == 'Виберіть тип оплати')
    $error = 'Виберіть тип оплати';
else if($payment == 'Виберіть місто')
    $error = 'Виберіть місто';
else if(strlen($postDepartment) == 0)
    $error = 'Введість номер поштового відділення';

if ($error != ''){
    echo $error;
    exit();
}

require 'connectDb.php';
$sql = 'INSERT INTO orders(nameInfo, phone, delivery, payment, city, postDepartment, comment, goodsId, title, price) VALUES(?,?,?,?,?,?,?,?,?,?)';
$query = $pdo->prepare($sql);
$query->execute([$nameInfo, $phone, $delivery, $payment, $city, $postDepartment, $comment, $goodsId, $title, $price]);
echo true;