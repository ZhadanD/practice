<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавление абонента</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<?php
require_once 'templates/header.php'
?>

<div class="container mt-5">
    <h1>Добавление абонента</h1>

    <form action="check_add_abonent.php" method="post">
        <label for="lastname" class="pt-2">Фамилия</label>
        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Введите вашу фамилию">

        <label for="firstname" class="pt-2">Имя</label>
        <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Введите ваше имя">

        <label for="patronymic" class="pt-2">Отчество</label>
        <input type="text" name="patronymic" id="patronymic" class="form-control" placeholder="Введите ваше отчество">

        <label for="main_phone" class="pt-2">Основной телефон</label>
        <input type="text" name="main_phone" id="main_phone" class="form-control" placeholder="Введите ваш основной номер телефона">

        <label for="spare_phone" class="pt-2">Запасной телефон</label>
        <input type="text" name="spare_phone" id="spare_phone" class="form-control" placeholder="Введите ваш запасной номер телефона">

        <button type="submit" class="btn btn-success mt-3">Добавить</button>
    </form>
</div>
</body>
</html>