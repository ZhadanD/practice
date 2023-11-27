<?php

$correct_answers = [
    'first_question_first_option' => 'on',
    'first_question_third_option' => 'on',
    'second_question_first_option' => 'on',
    'second_question_second_option' => 'on',
    'third_question_first_option' => 'on',
    'third_question_third_option' => 'on',
];

$counter = 0;

foreach($_POST as $key => $value) {
    if($correct_answers[$key]) $counter++;
}

if($counter == 0) {
    echo "<h1>Вы провалили тест!</h1><h2>Набранное кол-во баллов = $counter</h2>";
} else if($counter >= 1 && $counter <= 2) {
    echo "<h1>Вы настоящий трудяга!</h1><h2>Набранное кол-во баллов = $counter</h2>";
} else if($counter > 2 && $counter <= 5) {
    echo "<h1>Вы большой молодец!</h1><h2>Набранное кол-во баллов = $counter</h2>";
} else if($counter == 6) {
    echo "<h1>Поздравляю, вы прошли тест!</h1><h2>Вы набрали МАКСИМАЛЬНОЕ кол-во баллов, а именно $counter!!!</h2>";
}
