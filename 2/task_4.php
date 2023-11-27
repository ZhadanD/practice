<?php
if($_POST['operation']) {
    $first_number = $_POST['first_number'];
    $second_number = $_POST['second_number'];

    $result = 0;

    switch($_POST['operation']) {
        case '+':
            $result = $first_number + $second_number;
            break;
        case '-':
            $result = $first_number - $second_number;
            break;
        case '*':
            $result = $first_number * $second_number;
            break;
        case '/':
            $result = $first_number / $second_number;
            break;
        default:
            $result = 'Неизвестная операция!!!';
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
    <title>Task 4</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container pt-5">
    <h1>Калькулятор</h1>

    <form method="post">
        <label for="first_number" class="pt-2">Первое число</label>
        <input type="text" name="first_number" id="first_number" class="form-control" placeholder="Введите первое число">

        <label for="second_number" class="pt-2">Второе число</label>
        <input type="text" name="second_number" id="second_number" class="form-control" placeholder="Введите второе число">

        <input type="submit" name="operation" class="btn btn-success mt-3" value="+">
        <input type="submit" name="operation" class="btn btn-success mt-3" value="-">
        <input type="submit" name="operation" class="btn btn-success mt-3" value="*">
        <input type="submit" name="operation" class="btn btn-success mt-3" value="/">
    </form>

    <div class="mt-2">
        <h2>Результат</h2>
        <textarea class="form-control"><?=$result?></textarea>
    </div>
</div>
</body>
</html>