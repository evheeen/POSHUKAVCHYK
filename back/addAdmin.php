<?php
$login = trim(filter_var($_POST['login'], FILTER_SANITIZE_STRING));
$pass = trim(filter_var($_POST['pass'], FILTER_SANITIZE_STRING));

$error = '';
if (strlen($login) <= 1)
    $error = 'Введіть логін';
else if (strlen($pass) <= 1)
    $error = 'Введіть пароль';

if ($error != ''){
    echo $error;
    exit();
}

require 'connectDb.php';
$sql = 'INSERT INTO admin(login, password) VALUES(?,?)';
$query = $pdo->prepare($sql);
$query->execute([$login, $pass]);
echo true;
?>