<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<?php
require_once 'templates/head.php'
?>
<div class="container mt-5">
    <h1>Авторизация</h1>

    <form action="login.php" method="post">
        <label for="login" class="pt-2">Логин</label>
        <input type="text" name="login" id="login" class="form-control" placeholder="Введите ваш логин">

        <label for="password" class="pt-2">Пароль</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Введите ваш пароль">

        <a href="register.php">Регистрация</a>

        <input name="click" type="submit" class="btn btn-success mt-3" value="Войти">
    </form>
    <?php
    require_once 'templates/foot.php'
    ?>
</div>
</body>
</html>