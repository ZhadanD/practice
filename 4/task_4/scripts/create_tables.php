<?php

require_once '../config.php';

try {
    $connection = new PDO("mysql:host=$host;dbname=$database", $username, $password);

    echo "[INFO] Успешное подключение к базе данных\n";

    $sql = "CREATE TABLE authors(
        author_id INT AUTO_INCREMENT PRIMARY KEY,
        surname VARCHAR(50),
        name VARCHAR(50))";

    $connection->exec($sql);

    echo "[INFO] Таблица 'authors' успешно создана\n";

    $sql = "CREATE TABLE books(
        book_id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50))";

    $connection->exec($sql);

    echo "[INFO] Таблица 'books' успешно создана\n";

    $sql = "CREATE TABLE books_authors(
        book_id INT,
        author_id INT,
        CONSTRAINT book_id_fk FOREIGN KEY(book_id) REFERENCES books(book_id) ON DELETE CASCADE ON UPDATE CASCADE,
        CONSTRAINT author_id_fk FOREIGN KEY(author_id) REFERENCES authors(author_id) ON DELETE CASCADE ON UPDATE CASCADE)";

    $connection->exec($sql);

    echo "[INFO] Сводная таблица 'books_authors' успешно создана\n";

    $connection->beginTransaction();

    $connection->exec("INSERT INTO authors(surname, name) VALUES('Жадан', 'Даниил')");
    $connection->exec("INSERT INTO authors(surname, name) VALUES('Сидоров', 'Владислав')");
    $connection->exec("INSERT INTO authors(surname, name) VALUES('Пупков', 'Александр')");

    $connection->exec("INSERT INTO books(name) VALUES('Война и мир')");
    $connection->exec("INSERT INTO books(name) VALUES('На маяк')");

    $connection->exec("INSERT INTO books_authors VALUES(1, 1)");
    $connection->exec("INSERT INTO books_authors VALUES(1, 2)");
    $connection->exec("INSERT INTO books_authors VALUES(1, 3)");
    $connection->exec("INSERT INTO books_authors VALUES(2, 2)");
    $connection->exec("INSERT INTO books_authors VALUES(2, 3)");

    $connection->commit();

    echo "[INFO] Данные успешно записаны в таблицы\n";
} catch (PDOException $e) {
    echo "[ERROR] Произошла ошибка при работе с базой данных\n";
    echo $e->getMessage() . "\n";
    $connection->rollBack();
}

$connection = null;
echo "[INFO] Соединение закрыто\n";
