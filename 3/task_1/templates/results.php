<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Результаты</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <h1>Результаты опроса</h1>

    <div class="mt-3">
        <h4>Оценка 'Отлично':</h4>
        <div class="progress mt-3" role="progressbar" aria-valuenow=<?=$results_excellent?> aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar" style="width: <?=$results_excellent?>%"></div>
        </div>
    </div>

    <div class="mt-3">
        <h4>Оценка 'Хорошо':</h4>
        <div class="progress mt-3" role="progressbar" aria-valuenow=<?=$results_good?> aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar" style="width: <?=$results_good?>%"></div>
        </div>
    </div>

    <div class="mt-3">
        <h4>Оценка 'Удовлетворительно':</h4>
        <div class="progress mt-3" role="progressbar" aria-valuenow=<?=$results_satisfactory?> aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar" style="width: <?=$results_satisfactory?>%"></div>
        </div>
    </div>

    <div class="mt-3">
        <h4>Оценка 'Плохо':</h4>
        <div class="progress mt-3" role="progressbar" aria-valuenow=<?=$results_bad?> aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar" style="width: <?=$results_bad?>%"></div>
        </div>
    </div>
</div>
</body>
</html>