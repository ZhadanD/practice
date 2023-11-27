<?php

$price_product = 100;
$inflation = 10;
$inc_inflation = 3.5;

$year = 1;

while ($price_product <= 170) {
    if($year == 1) {
        $price_product += $price_product * $inflation / 100;
        echo "$year год:" . $price_product . ' рублей.' . "<br/>";
        $year++;
    } else {
        $inflation += $inc_inflation;

        $price_product += $price_product * $inflation / 100;

        echo "$year год: " . $price_product . ' рублей.' . "<br/>";

        $year++;
    }
}

echo "<h1>Снижение инфляции</h1>";

$year = 1;

for ($i = 0; $i < 10; $i++) {
    $inflation -= 3.5;

    $price_product += $price_product * $inflation / 100;

    echo "$year год: " . $price_product . ' рублей.' . "<br/>";

    $year++;
}
