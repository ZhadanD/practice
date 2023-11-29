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

function check_user() {
    if(!isset($_SESSION['my_inside'])) return '';
    else return $_SESSION['current_user'];
}

function dbquery($sql) {
    create_table_users();

    require 'config.php';

    try {
        $conn = new PDO("mysql:host=$host;dbname=$db", $username, $password);

        $res = $conn->query($sql)->fetch();
    } catch (PDOException $e) {
        echo $e;
    }

    $conn = null;

    return $res;
}

function create_user($sql) {
    create_table_users();

    require 'config.php';

    $res = true;

    try {
        $conn = new PDO("mysql:host=$host;dbname=$db", $username, $password);

        $conn->exec($sql);
    } catch (PDOException $e) {
        $res = false;
    }

    $conn = null;

    return $res;
}
