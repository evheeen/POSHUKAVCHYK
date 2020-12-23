<?php
$userId = trim(filter_var($_POST['userId'], FILTER_SANITIZE_NUMBER_INT));

$error = '';
if (strlen($userId) == 0)
    $error = 'Введість ID адміністратора';
else if ($userId == 0)
    $error = 'Невірне ID адміністратора';

if ($error != '') {
    echo $error;
    exit();
}

require 'connectDb.php';
$sql = 'DELETE FROM admin WHERE userId = (?)';
$query = $pdo->prepare($sql);
$query->execute([$userId]);
echo true;