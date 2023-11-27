<?php

$lastname = strip_tags(trim($_POST['lastname']));
$firstname = strip_tags(trim($_POST['firstname']));
$patronymic = strip_tags(trim($_POST['patronymic']));
$main_phone = strip_tags(trim($_POST['main_phone']));
$spare_phone = strip_tags(trim($_POST['spare_phone']));

function validation() {
    global $lastname;
    global $firstname;
    global $patronymic;
    global $main_phone;
    global $spare_phone;

    if($lastname == '' || $firstname == '' || $patronymic == '' || $main_phone == '' || $spare_phone == '') {
        echo "<h3>Введите все данные!</h3>";
        return false;
    } else if(strlen($main_phone) != 11 || strlen($spare_phone) != 11) {
        echo "<h3>Длина номеров телефонов должна равняться 11-и!!!</h3>";
        return false;
    }

    return true;
}

if(validation()) {
    $special_char = '% next %';

    $file = fopen('data/abonents.txt', 'a');

    $result_string = "$lastname $firstname $patronymic $main_phone $spare_phone$special_char";

    fwrite($file, $result_string);

    fclose($file);

    header('Location: index.php');
}
