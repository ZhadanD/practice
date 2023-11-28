<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Заполнение таблицы telephones</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <h1>Заполнение таблицы telephones</h1>

    <form action="check_telephones.php" method="post">
        <label for="lastname" class="mt-2">Фамилия</label>
        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Введите фамилию">

        <label for="mail" class="mt-2">Email</label>
        <input type="email" name="mail" id="mail" class="form-control" placeholder="Введите email">

        <label for="telephone" class="mt-2">Телефон</label>
        <input type="text" name="telephone" id="telephone" class="form-control" placeholder="Введите телефон">

        <input name="click" type="submit" class="btn btn-success mt-3" value="Создать">
    </form>
</div>
</body>
</html>