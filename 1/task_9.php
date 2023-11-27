<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задание 9</title>
</head>
<body>
<?php
$n = 10;

$numbers = [];

echo "<h3>Начало генерации случайных чисел:</h3>";

while(array_sum($numbers) < $n) {
    $num = rand(1, 10);
    echo 'Сгенерированное число: ' . $num . "<br/>";
    array_push($numbers, $num);
}

$sum = array_sum($numbers);

echo "<p>Сумма случайных чисел: $sum</p><p>Заданное значение: $n</p>";

echo array_sum($numbers) == $n ? "<h3>Заданное значение n равно сумме случайных чисел, цикл прерван!</h3>" : "<h3>Сумма случайных чисел больше заданного значения n, цикл прерван!</h3>";
?>
</body>
</html>