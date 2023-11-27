<?php

function asArrayOutput($products) {
    foreach($products as $name => $price) {
        echo "<p>Товар $name стоит $price рублей.</p>";
    }
}

$products = array(
    'Стол' => 15000,
    'Стул' => 17000,
    'Компьютер' => 500000,
);

$products['Мышка'] = 5000;
$products['Клавиатура'] = 15000;

asArrayOutput($products);

$counter_products = count($products);

echo "<h3>Всего $counter_products товаров.</h3>";

$sum = array_sum($products);

echo "<h3>Их суммарная стоимость составляет: $sum</h3>";

echo "<h1>В порядке возрастания</h1>";

asort($products);

asArrayOutput($products);

echo "<h1>В порядке убывания</h1>";

arsort($products);

asArrayOutput($products);

echo "<h1>Названия товаров в алфавитном порядке</h1>";

ksort($products);

asArrayOutput($products);
