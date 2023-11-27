<?php

function check_password($pass) {
    $password = '123';

    if($password == $pass) {
        return 'Пароль верный';
    } else {
        return 'Ошибка в пароле';
    }
}

echo check_password('1223'). "\n";
