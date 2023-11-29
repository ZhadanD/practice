<?php

require_once 'functions.php';

$login = strip_tags(trim($_POST['login']));
$password = strip_tags(trim($_POST['password']));
$confirm_password = strip_tags(trim($_POST['confirm_password']));

if($password != $confirm_password) {
    echo "<h1>Пароли не совпадают!</h1>";
    exit;
}

$user = get_user($login);

if($user) {
    echo "<h1>Логин занят!</h1>";
    exit;
}

$result = create_user($login, $password);

if($result) {
    setcookie('username', $login, strtotime('+3 minute'));

    header("Location: http://$_SERVER[HTTP_HOST]");
} else {
    echo "<h1>Ошибка регистрации</h1>";
}
