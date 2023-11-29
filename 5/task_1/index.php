<?php

session_start();

require_once 'functions.php';

if(!isset($_GET['step'])) {
    setcookie('my_cookie', 'ok');
    header("Location: $_SERVER[PHP_SELF]?step=1");
} else {
    $res = $_COOKIE['my_cookie'] == 'ok' ? 'Yes' : 'No';

    setcookie('my_cookie', '', time()-14*24*3600);
    echo "<br/>Cookie test: $res";
}

$login = check_user();

if(!empty($login)) {
    echo "<p>Приветствую, $login! <a href='logout.php'>Выход</a></p>";
    echo "<p>Тебе доступен огромный контент нашего сайта!</p>";
} else require_once 'logform.php';
