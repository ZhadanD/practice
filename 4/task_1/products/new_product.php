<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Новый товар</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<?php
require_once 'templates/header.php';
?>
<div class="container mt-5">
    <h1>Новый товар</h1>

    <form action="check_product.php" method="post">
        <label for="name" class="mt-2">Название</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Введите название товара">

        <label for="price" class="mt-2">Цена</label>
        <input type="text" name="price" id="price" class="form-control" placeholder="Введите цену товара">

        <label for="description" class="mt-2">Описание</label>
        <textarea name="description" id="description" class="form-control" placeholder="Введите описание товара"></textarea>

        <input name="click" type="submit" class="btn btn-success mt-3" value="Создать">
    </form>
</div>
</body>
</html>