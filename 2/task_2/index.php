<?php
if(count($_POST) != 0) {
    $correct_password = md5('123');

    if(md5($_POST['password']) == $correct_password) {
        header('Location: correct_password.html');
    } else {
        echo "Пароль неверный!<br/>";
    }
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 2</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container pt-5">
    <h2>Заполните форму</h2>

    <form method="post">
        <label for="lastname" class="pt-2">Фамилия</label>
        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Введите вашу фамилию">

        <label for="firstname" class="pt-2">Имя</label>
        <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Введите ваше имя">

        <label for="patronymic" class="pt-2">Отчество</label>
        <input type="text" name="patronymic" id="patronymic" class="form-control" placeholder="Введите ваше отчество">

        <label for="address" class="pt-2">Адрес</label>
        <input type="text" name="address" id="address" class="form-control" placeholder="Введите ваш адрес">

        <label for="email" class="pt-2">Электронная почта</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Введите ваш адрес электронной почты">

        <label for="password" class="pt-2">Пароль</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Введите ваш пароль">

        <button type="submit" class="btn btn-success mt-3">Отправить</button>
    </form>
</div>
</body>
</html>