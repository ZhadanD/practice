<?php

if(!$_COOKIE['username']) header('Location: sign_in.php');

if($_POST['click']) {
    require_once 'config.php';

    try {
        $connection = new PDO("mysql:host=$host;dbname=$db", $username, $password);

        $connection->exec("CREATE TABLE IF NOT EXISTS messages(
                                    message_id INT AUTO_INCREMENT PRIMARY KEY,
                                    email VARCHAR(50),
                                    text VARCHAR(250),
                                    date_time DATETIME)");

        $current_date_time = date('Y.m.d H:i:s');

        $connection->exec("INSERT INTO messages(email, text, date_time) VALUES('$_POST[email]', '$_POST[text_message]', '$current_date_time')");

        $connection = null;

        header('Location: index.php');
    } catch (PDOException $e) {
        echo "[ERROR] Произошла ошибка при работе с базой данных<br/>";
        echo $e->getMessage() . "<br/>";
    }

    $connection = null;
}
