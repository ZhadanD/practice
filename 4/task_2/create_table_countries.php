<?php

require_once 'config.php';

try {
    $connection = new PDO("mysql:host=$host;dbname=$database", $username, $password);

    echo "[INFO] Успешное подключение к базе данных\n";

    $sql = "CREATE TABLE countries(
        country_id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50))";

    $connection->exec($sql);

    echo "[INFO] Таблица 'countries' успешно создана\n";

    $connection->beginTransaction();

    $connection->exec("INSERT INTO countries(name) VALUES('Россия')");
    $connection->exec("INSERT INTO countries(name) VALUES('Китай')");

    $connection->commit();

    echo "[INFO] Новые две записи успешно записаны в таблицу 'countries'\n";

    $connection->exec('ALTER TABLE products ADD COLUMN country_id INT');

    echo "[INFO] Добавил столбец 'country_id' в таблицу 'products'\n";

    $connection->exec('ALTER TABLE products ADD CONSTRAINT products_countries_fk FOREIGN KEY(country_id) REFERENCES countries(country_id) ON DELETE CASCADE ON UPDATE CASCADE');

    echo "[INFO] Добавил ограничение внешнего ключа на таблицу 'countries' в таблицу 'products'\n";
} catch (PDOException $e) {
    echo "[ERROR] Произошла ошибка при работе с базой данных\n";
    echo $e->getMessage() . "\n";
    $connection->rollBack();
}

$connection = null;
echo "[INFO] Соединение закрыто\n";
