<?php
$result = '';

if($_POST['click']) {
    $response = file_get_contents($_POST['url']);

    if($response) $result = 'Сервер доступен!';
    else $result = 'Сервер недоступен :(';
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 3</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <h1>Проверка доступности сервера</h1>

    <form method="post">
        <label for="url" class="pt-2">URL</label>
        <input type="text" name="url" id="url" class="form-control" placeholder="Введите адрес сервера">

        <input name="click" type="submit" class="btn btn-success mt-3" value="Проверить">
    </form>

    <div class="mt-5">
        <h3>Результат</h3>
        <textarea class="form-control border-success"><?=$result?></textarea>
    </div>
</div>
</body>
</html>