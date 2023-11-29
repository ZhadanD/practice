<?php

require 'functions.php';

$login = strip_tags(trim($_POST['login']));
$password = strip_tags(trim($_POST['password']));

if(validation($login, $password)) {
    if(check_user($login, $password)) {
        setcookie('username', $login, strtotime('+3 minute'));

        header("Location: http://$_SERVER[HTTP_HOST]");
    } else {
        echo "Ошибка авторизации<br/>";
    }
} else {
    echo "Ошибка валидации<br/>";
}
