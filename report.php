<!DOCTYPE html>
<html lang='ru'>
<?php
$siteTitle = 'ЗВІТНІСТЬ';
if ($_COOKIE['log'] == ''){
    require '404.php';
}else{
    require 'blocks/headerReport.php';
    require 'blocks/reportTable.php';
    require 'blocks/adminFooter.php';
}
?>
</html>