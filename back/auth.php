<?php
$login = trim(filter_var($_POST['login'],FILTER_SANITIZE_STRING));
$pass = trim(filter_var($_POST['pass'],FILTER_SANITIZE_STRING));

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
$sql = 'SELECT `userId` FROM `admin` WHERE `login` = :login && `password` = :pass';
$query = $pdo->prepare($sql);
$query -> execute(['login' => $login, 'pass' => $pass]);
$user = $query->fetch(PDO::FETCH_OBJ);
if($user->userId == 0){
    echo 'Такого адміністратора не існує';
}else{
    setcookie('log', $login, time() + 3600 * 24, "/");
    echo true;
}
?>
