<?php
session_start();
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Персональные настройки</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="background-color: <?=$_SESSION['background']?>">
<div class="container mt-5">
    <h1>Персональные настройки<?=$_SESSION['nick'] ? ' для пользователя ' . $_SESSION['nick'] : ''?></h1>

    <form action="save_settings.php" method="post">
        <label for="nick" class="pt-2">Ник</label>
        <input type="text" name="nick" id="nick" class="form-control" placeholder="Введите ваш ник">

        <div class="mt-3">
            <h5>Фон страницы</h5>
            <div class="btn-group" role="group">
                <input type="radio" class="btn-check" name="background" id="green" value="green" autocomplete="off" checked>
                <label class="btn btn-outline-success" for="green">Зеленый</label>

                <input type="radio" class="btn-check" name="background" id="red" value="red" autocomplete="off">
                <label class="btn btn-outline-danger" for="red">Красный</label>

                <input type="radio" class="btn-check" name="background" id="blue" value="blue" autocomplete="off">
                <label class="btn btn-outline-primary" for="blue">Синий</label>
            </div>
        </div>

        <input name="click" type="submit" class="btn btn-success mt-3" value="Сохранить">
    </form>
</div>
</body>
</html>