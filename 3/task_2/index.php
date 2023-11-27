<?php
$abonents = explode('% next %', file_get_contents('./data/abonents.txt'));
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 2</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<?php
require_once 'templates/header.php'
?>

<div class="container mt-5">
    <h1>Абоненты</h1>

    <div class="border border-success rounded p-3">
        <?php
        if($abonents[0] == '') {
            echo "<h2>Нет абонентов!</h2>";
        } else {
            foreach($abonents as $i => $abonent) {
                if($abonent != '') {
                    $i++;
                    echo "<h2><a class='link-success' href='update_abonent.php?abonent_id=$i'>$i</a>. $abonent <a href='delete_abonent.php?abonent_id=$i' type=button class='btn btn-danger'>X</a></h2>";
                }
            }
        }
        ?>
    </div>
</div>
</body>
</html>