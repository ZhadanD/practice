<?php
session_start();

require_once 'url_generation.php';

if(!$_SESSION['main']) $_SESSION['main'] = $url;
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Список посещенных страниц</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<?php
require_once 'templates/header.php';
?>
<div class="container">
    <?php
    $i = 1;
    if(count($_SESSION) == 0) echo "<p>Вы еще не посещали страницы</p>";
    else {
        echo "<h4>Посещенные страницы</h4>";

        foreach($_SESSION as $page_name) {
            echo "<p>$i. $page_name</p>";
            $i++;
        }
    }
    ?>
</div>
</body>
</html>