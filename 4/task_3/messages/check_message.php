<?php

if($_POST['click']) {
    require_once '../config.php';

    try {
        $connection = new PDO("mysql:host=$host;dbname=$database", $username, $password);

        $current_date_time = date('Y.m.d H:i:s');

        $connection->exec("INSERT INTO messages(email, text, date_time) VALUES('$_POST[email]', '$_POST[text_message]', '$current_date_time')");

        $connection = null;

        header('Location: new_message.php');
    } catch (PDOException $e) {
        echo "[ERROR] Произошла ошибка при работе с базой данных<br/>";
        echo $e->getMessage() . "<br/>";
    }

    $connection = null;
}
