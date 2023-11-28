<?php

require_once 'config.php';

try {
    $connection = new PDO("mysql:host=$host;dbname=$database", $username, $password);

    echo "[INFO] Успешное подключение к базе данных\n";

    $sql = "CREATE TABLE messages(
        message_id INT AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(50),
        text VARCHAR(250),
        date_time DATETIME)";

    $connection->exec($sql);

    echo "[INFO] Таблица 'messages' успешно создана\n";
} catch (PDOException $e) {
    echo "[ERROR] Произошла ошибка при работе с базой данных\n";
    echo $e->getMessage() . "\n";
}

$connection = null;
echo "[INFO] Соединение закрыто\n";
