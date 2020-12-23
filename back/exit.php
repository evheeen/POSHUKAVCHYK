<?php
    setcookie('log', $login, time() - 3600 *24, "/");
    echo true;
?>