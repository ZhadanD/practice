<?php

require_once '../config.php';

try {
    $connection = new PDO("mysql:host=$host;dbname=$database", $username, $password);

    echo "[INFO] Успешное подключение к базе данных\n";

    $sql = "CREATE TABLE movies(
        movie_id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50))";

    $connection->exec($sql);

    echo "[INFO] Таблица 'movies' успешно создана\n";

    $sql = "CREATE TABLE countries(
        country_id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50))";

    $connection->exec($sql);

    echo "[INFO] Таблица 'countries' успешно создана\n";

    $sql = "CREATE TABLE movies_countries(
        movie_id INT,
        country_id INT,
        CONSTRAINT movie_id_fk FOREIGN KEY(movie_id) REFERENCES movies(movie_id) ON DELETE CASCADE ON UPDATE CASCADE,
        CONSTRAINT country_id_fk FOREIGN KEY(country_id) REFERENCES countries(country_id) ON DELETE CASCADE ON UPDATE CASCADE)";

    $connection->exec($sql);

    echo "[INFO] Сводная таблица 'movies_countries' успешно создана\n";
} catch (PDOException $e) {
    echo "[ERROR] Произошла ошибка при работе с базой данных\n";
    echo $e->getMessage() . "\n";
}

$connection = null;
echo "[INFO] Соединение закрыто\n";
