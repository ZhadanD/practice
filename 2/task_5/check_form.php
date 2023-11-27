<?php

$name = strip_tags(trim($_POST['name']));
$languages = strip_tags(trim($_POST['languages']));
$date_birth = strip_tags(trim($_POST['date_birth']));

function validation() {
    global $name;
    global $languages;
    global $date_birth;

    if($name == '' || $languages == '' || $date_birth == '') {
        echo "<h3>Введите все данные!</h3>";
        return false;
    } else if(strlen($name) <= 3) {
        echo "<h3>Введите корректное имя!</h3>";
        return false;
    }

    return true;
}

function processing() {
    global $name;
    global $languages;
    global $date_birth;

    $counter_languages = count(explode(',', $languages));

    $nowadays = new DateTime("now");
    $date_birth = new DateTime($date_birth);
    $interval = abs($nowadays->diff($date_birth)->format('%R%Y'));

    echo "<h1>Вас зовут $name.</h1>";
    echo "<h1>Вы знаете $counter_languages языков программирования.</h1>";
    echo "<h1>Вам $interval лет.</h1>";
}

if(validation()) processing();
