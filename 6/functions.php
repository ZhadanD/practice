<?php

function create_table_users() {
    require 'config.php';

    try {
        $conn = new PDO("mysql:host=$host;dbname=$db", $username, $password);

        $conn->exec("CREATE TABLE IF NOT EXISTS users(
                                                        user_id INT AUTO_INCREMENT PRIMARY KEY,
                                                        login VARCHAR(100) NOT NULL UNIQUE,
                                                        password VARCHAR(255) NOT NULL)");
    } catch (PDOException $e) {
        echo $e;
    }

    $conn = null;
}

function get_user($login) {
    create_table_users();

    require 'config.php';

    try {
        $conn = new PDO("mysql:host=$host;dbname=$db", $username, $password);

        $res = $conn->query("SELECT login, password FROM users WHERE login='$login'")->fetch();
    } catch (PDOException $e) {
        echo $e;
    }

    $conn = null;

    return $res;
}

function create_user($login, $user_password) {
    create_table_users();

    require 'config.php';

    $res = true;

    try {
        $conn = new PDO("mysql:host=$host;dbname=$db", $username, $password);

        $user_password_in_hash = md5($user_password);

        $conn->exec("INSERT INTO users(login, password) VALUES('$login', '$user_password_in_hash')");
    } catch (PDOException $e) {
        $res = false;
    }

    $conn = null;

    return $res;
}

function check_user($login, $password) {
    $user = get_user($login);

    if(!$user) return false;
    else if($user['password'] != md5($password)) return false;

    return true;
}

function validation($login, $password) {
    if($login == '' || $password == '') return false;

    return true;
}
