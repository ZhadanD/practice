<?php

function arrayOutput($products) {
    for ($i = 0; $i < count($products); $i++) {
        echo "<p>$products[$i]</p>";
    }
}

$products = array(
    'Стол',
    'Стул',
    'Компьютер',
    'Мышка',
    'Клавиатура'
);

$products[5] = 'Ножницы';
$products[6] = 'Монитор';

echo "<h1>Исходный массив</h1>";

arrayOutput($products);

echo "<h1>Отсортированный массив</h1>";

sort($products);

arrayOutput($products);
