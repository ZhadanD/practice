<?php

if($_POST['choice']) {
    $path = './data';

    $exc = 'excellent';
    $good = 'good';
    $satis = 'satisfactory';
    $bad = 'bad';

    function inc_counter($filename) {
        global $path;

        $counter = file_get_contents("$path/$filename.txt");
        $counter++;
        file_put_contents("$path/$filename.txt", $counter);
    }

    function output_results() {
        global $path;

        global $exc;
        global $good;
        global $satis;
        global $bad;

        $results_excellent = file_get_contents("$path/$exc.txt");
        $results_good = file_get_contents("$path/$good.txt");
        $results_satisfactory = file_get_contents("$path/$satis.txt");
        $results_bad = file_get_contents("$path/$bad.txt");

        require_once 'templates/results.php';
    }

    switch($_POST['choice']) {
        case $exc:
            inc_counter($exc);
            output_results();
            break;
        case $good:
            inc_counter($good);
            output_results();
            break;
        case $satis:
            inc_counter($satis);
            output_results();
            break;
        case $bad:
            inc_counter($bad);
            output_results();
            break;
        default:
            echo "<h1>Нет такого варианта ответа!</h1>";
    }
} else {
    echo "<h1>Выберите пожалуйста вариант ответа!</h1>";
}
