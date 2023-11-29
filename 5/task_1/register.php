<?php

require_once 'functions.php';

include 'templates/head.php';

$login_of_form = strip_tags(trim($_POST['login']));
$password1 = strip_tags(trim($_POST['password1']));
$password2 = strip_tags(trim($_POST['password2']));

$error = '';

if(!empty($password1) and $password1 != $password2) $error .= 'Пароли не совпадают';
if(!empty($login_of_form)) {
    $sql = "SELECT login FROM users WHERE login='$login_of_form'";

    $res = dbquery($sql);

    if($res) $error .= 'Такой логин уже есть';
}

if(!empty($error)) {
    echo "<p>$error, <a href='register.php'>Попробуйте еще раз</a></p>";
    include 'templates/foot.php';
    exit;
}

if(!empty($login_of_form) and !empty($password1)) {
    $password_in_hash = md5($password1);

    $sql = "INSERT INTO users(login, password) VALUES('$login_of_form', '$password_in_hash')";

    $result = create_user($sql);

    if(!$result) echo "Bad sql $sql";
    else {
        echo "<p>Регистрация успешна, войдите в систему с <a href='index.php'>главной страницы</a></p>";
    }
} else {
?>
    <h1>Регистрация</h1>

    <form method="post">
        <label for="login" class="pt-2">Логин</label>
        <input type="text" name="login" id="login" placeholder="Введите ваш логин">

        <label for="password1" class="pt-2">Пароль</label>
        <input type="password" name="password1" id="password1" placeholder="Введите ваш пароль">

        <label for="password2" class="pt-2">Повторите пароль</label>
        <input type="password" name="password2" id="password2" placeholder="Повторите ваш пароль">

        <input name="click" type="submit" value="Зарегистрироваться">
    </form>
<?php
}
include 'templates/foot.php';
?>