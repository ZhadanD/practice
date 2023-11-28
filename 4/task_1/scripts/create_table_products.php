<?php

require_once '../config.php';

try {
    $connection = new PDO("mysql:host=$host;dbname=$database", $username, $password);

    echo "[INFO] Успешное подключение к базе данных\n";

    $sql = "CREATE TABLE products(
        product_id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        price FLOAT NOT NULL,
        description VARCHAR(200))";

    $connection->exec($sql);

    echo "[INFO] Таблица 'products' успешно создана\n";

    $connection->exec("INSERT INTO products(name, price, description) 
                                VALUES('Ноутбук', 30000, 'Очень хороший!'),
                                      ('Стол', 15000, 'Замурчательный!'),
                                      ('Кресло', 17000, 'Сидится клева!'),
                                      ('Повербанк', 2000, 'Сойдет'),
                                      ('Часы настольные', 3000, 'Ну, вроде работает')");

    echo "[INFO] Новые товары успешно записаны в таблицу 'products'\n";
} catch (PDOException $e) {
    echo "[ERROR] Произошла ошибка при работе с базой данных\n";
    echo $e->getMessage() . "\n";
}

$connection = null;
echo "[INFO] Соединение закрыто\n";
