<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Новое сообщение</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <h1>Новое сообщение</h1>

    <form action="check_message.php" method="post">
        <label for="email" class="mt-2">Почта</label>
        <input type="text" name="email" id="email" class="form-control" placeholder="Введите почту">

        <label for="text_message" class="mt-2">Текст сообщения</label>
        <textarea name="text_message" id="text_message" class="form-control" placeholder="Введите ваше сообщение"></textarea>

        <input name="click" type="submit" class="btn btn-success mt-3" value="Отправить">
    </form>
</div>
</body>
</html>