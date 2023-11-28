<?php

require_once 'config.php';

try {
    $connection = new PDO("mysql:host=$host;dbname=$database", $username, $password);

    $sql = "SELECT p.name, p.price, p.description, c.name as country_name FROM products as p JOIN countries as c ON p.product_id = c.country_id ORDER BY p.price";

    $result = $connection->query($sql);
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Товары</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <h1>Все товары</h1>

    <?php
    while($row = $result->fetch()) {
        echo "<div class='card mb-3' style='width: 18rem'><div class=card-body>";
        echo "<h5 class=card-title>$row[name]</h5>";
        echo "<h6 class='card-subtitle mb-2 text-body-secondary'>$row[price]</h6>";
        echo "<p class=card-text>$row[description]</p>";
        echo "<p class=card-text>$row[country_name]</p>";
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