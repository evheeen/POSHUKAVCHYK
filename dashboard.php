<!DOCTYPE html>
<html lang='ru'>
<?php
    $siteTitle = 'ПОШУКАВЧИК | АДМІН-ПАНЕЛЬ';
    if ($_COOKIE['log'] == ''){
        require '404.php';
    }else{
        require 'blocks/header.php';
        require 'blocks/dbGoodsForm.php';
        require 'blocks/dbTable.php';
        require 'blocks/adminFooter.php';
    }
?>
</html>