<?php

require_once 'config.php';

try {
    $connection = new PDO("mysql:host=$host;dbname=$database", $username, $password);

    $sql = "SELECT b.name, COUNT('name') as counter 
            FROM books as b 
            LEFT JOIN books_authors ON books_authors.book_id = b.book_id
            LEFT JOIN authors ON books_authors.author_id = authors.author_id
            GROUP BY b.name
            HAVING counter = 3";

    $result = $connection->query($sql);
    ?>
    <!doctype html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Книги</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
    <div class="container mt-5">
        <h1>Все книги</h1>

        <?php
        while($row = $result->fetch()) {
            echo "<div class='card mb-3' style='width: 18rem'><div class=card-body>";
            echo "<h5 class=card-title>Название книги: $row[name]</h5>";
            echo "<p class=card-text>Кол-во соавторов: $row[counter]</p>";
            echo "</div></div>";
        }
        ?>
    </div>
    </body>
    </html>
    <?php
} catch (PDOException $e) {
    echo $e->getMessage();
}

$connection = null;
?>