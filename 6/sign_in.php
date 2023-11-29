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
<div class="container mt-5">
    <h1>Вход в систему</h1>

    <p>У вас еще нет учетной записи? <a href="sign_up.php" class="link-success">Зарегистрируйстесь</a>!</p>

    <form action="check_sign_in.php" method="post">
        <input type="text" name="login" placeholder="Введите ваш логин" class="form-control"/><br/>
        <input type="password" name="password" placeholder="Введите ваш пароль" class="form-control"/><br/>
        <input type="submit" value="Войти" class="btn btn-success">
    </form>
</div>
</body>
</html>