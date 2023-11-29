<?php

require_once 'functions.php';

session_start();

function login($login, $password) {
    $sql = "SELECT login, password FROM users WHERE login='$login'";

    $res = dbquery($sql);

    if($res && $res['password'] == md5($password)) {
        $_SESSION['my_inside'] = 1;
        $_SESSION['current_user'] = $login;
    }
}

$login = strip_tags(trim($_POST['login']));
$password = strip_tags(trim($_POST['password']));

login($login, $password);
header('Location: index.php');
