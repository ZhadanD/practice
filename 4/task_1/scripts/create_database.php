<?php

require_once '../config.php';

$name_new_db = readline('Введите название новой БД: ');

try {
    $connection = new PDO("mysql:host=$host;dbname=$database", $username, $password);

    echo "[INFO] Успешное подключение к базе данных\n";

    $sql = "CREATE DATABASE $name_new_db";

    $connection->exec($sql);

    echo "[INFO] Новая база данных успешно создана\n";
} catch (PDOException $e) {
    echo "[ERROR] Произошла ошибка при работе с базой данных\n";
    echo $e->getMessage() . "\n";
}

$connection = null;
echo "[INFO] Соединение закрыто\n";
