<?php

echo "<h1>Через цикл while:</h1>";

$price_product = 100;
$inflation = 10;
$inc_inflation = 3.5;

$year = 1;

while ($price_product <= 150) {
    if($year == 1) {
        $price_product += $price_product * $inflation / 100;
        echo "$year год:" . $price_product . ' рублей.' . "<br/>";
        $year++;
    } else {
        $inflation += $inc_inflation;

        $price_product += $price_product * $inflation / 100;

        if($price_product > 150) break;

        echo "$year год: " . $price_product . ' рублей.' . "<br/>";

        $year++;
    }
}

echo "<h1>Через цикл for:</h1>";

$price_product = 100;
$inflation = 10;
$inc_inflation = 3.5;

for ($i = 0; $i < 5; $i++) {
    if($i == 0) {
        $price_product += $price_product * $inflation / 100;
        echo 'ГОД => ' . ($i + 1) . ' ЦЕНА =>' . $price_product . ' ИНФЛЯЦИЯ => ' . $inflation . "<br/>";
    } else {
        $inflation += $inc_inflation;

        $price_product += $price_product * $inflation / 100;

        if($price_product > 150) break;

        echo 'ГОД => ' . ($i + 1) . ' ЦЕНА =>' . $price_product . ' ИНФЛЯЦИЯ => ' . $inflation . "<br/>";
    }
}
