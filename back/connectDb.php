<?php
    $user = 'mysql';
    $password = 'mysql';
    $db = 'searcher';
    $host = 'localhost';

    $dsn = 'mysql:host='.$host.';dbname='.$db;
    $pdo = new PDO($dsn,$user,$password);
?>
