<?php
$goodsId = trim(filter_var($_POST['goodsId'], FILTER_SANITIZE_NUMBER_INT));

$error = '';
if (strlen($goodsId) == 0)
    $error = 'Введість ID товару';
else if ($goodsId == 0)
    $error = 'Невірне ID товару';

if ($error != '') {
    echo $error;
    exit();
}

require 'connectDb.php';
$sql = 'DELETE FROM goods WHERE goodsId = (?)';
$query = $pdo->prepare($sql);
$query->execute([$goodsId]);
echo true;