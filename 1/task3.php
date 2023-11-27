<?php

$product1 = 'чайник';
$product2 = 'кофейник';
$product3 = 'кипитильник';

$price1 = 1503;
$price2 = 1120;
$price3 = 220;

function maxproduct($product1, $price1, $product2, $price2, $product3, $price3) {
    if($price1>$price2 && $price1>$price3) {
        $maxprice = $price1;
        $maxproduct = $product1;
    } else if($price2>$price3) {
        $maxprice = $price2;
        $maxproduct = $product2;
    } else {
        $maxprice = $price3;
        $maxproduct = $product3;
    }

    echo $maxprice . "<br/>";
    echo $maxproduct . "<br/>";
    echo "<br/>";
}

maxproduct('стол', 15000, 'стул', 1000, 'ноутбук', 30000);
maxproduct('мышка', 2000, 'клавиатура', 5000, 'кресло', 7000);
maxproduct('шкаф', 3000, 'телевизор', 50000, 'кухня', 150000);
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 3</title>
</head>
<body>
<table border="1">
    <tr>
        <th>Товар</th>
        <th>Цена</th>
    </tr>
    <tr>
        <th><?=$product1?></th>
        <th><?=$price1?>></th>
    </tr>
    <tr>
        <th><?=$product2?></th>
        <th><?=$price2?>></th>
    </tr>
    <tr>
        <th><?=$product3?></th>
        <th><?=$price3?>></th>
    </tr>
</table>

<h4>Средняя цена <?=round(($price1 + $price2 + $price3) / 3)?> рублей.</h4>
</body>
</html>