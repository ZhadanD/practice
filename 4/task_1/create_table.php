<?php

require_once 'config.php';

try {
    $connection = new PDO("mysql:host=$host;dbname=$database", $username, $password);

    echo "[INFO] Успешное подключение к базе данных\n";

    $sql = "CREATE TABLE telephones(
        id INT AUTO_INCREMENT PRIMARY KEY,
        surname VARCHAR(20),
        email VARCHAR(20),
        tel VARCHAR(20))";

    $connection->exec($sql);

    echo "[INFO] Таблица 'telephones' успешно создана\n";

    $connection->beginTransaction();

    $connection->exec("INSERT INTO telephones(surname, email, tel) VALUES('Жадан', 'zhadan@mail.ru', '000')");
    $connection->exec("INSERT INTO telephones(surname, email, tel) VALUES('Сидоров', 'sidorov@mail.ru', '123')");
    $connection->exec("INSERT INTO telephones(surname, email, tel) VALUES('Пучков', 'puchit@mail.ru', '333')");

    $connection->commit();

    echo "[INFO] Новые три записи успешно записаны в таблицу 'telephones'\n";
} catch (PDOException $e) {
    echo "[ERROR] Произошла ошибка при работе с базой данных\n";
    echo $e->getMessage() . "\n";
    $connection->rollBack();
}

$connection = null;
echo "[INFO] Соединение закрыто\n";
