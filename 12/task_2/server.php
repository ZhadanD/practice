<?php

if($_GET['brand']) {
    $brands = [
        'Audi' => 'A4, A5',
        'Ford' => 'Focus, Mondeo',
        'Citroen' => 'C4, C5',
    ];

    echo $brands[$_GET['brand']];
}
