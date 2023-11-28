<?php

if($_POST['click']) {
    require_once '../config.php';

    try {
        $connection = new PDO("mysql:host=$host;dbname=$database", $username, $password);

        $connection->exec("INSERT INTO products(name, price, description) VALUES('$_POST[name]', '$_POST[price]', '$_POST[description]')");

        $connection = null;

        header('Location: index.php');
    } catch (PDOException $e) {
        echo "[ERROR] Произошла ошибка при работе с базой данных<br/>";
        echo $e->getMessage() . "<br/>";
    }

    $connection = null;
}
