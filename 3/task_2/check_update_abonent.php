<?php

if(!$_GET['abonent_id'] && !$_POST) {
    echo "<h1>Передайте данные абонента!!!</h1>";
} else {
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
        $path = 'data/abonents.txt';

        $special_char = '% next %';

        $abonents = explode($special_char, file_get_contents($path));

        $abonents[$_GET['abonent_id'] - 1] = "$lastname $firstname $patronymic $main_phone $spare_phone";

        file_put_contents($path, implode($special_char, $abonents));

        header('Location: index.php');
    }
}
