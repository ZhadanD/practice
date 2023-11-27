<?php
$content = [
        'title' => 'Обо мне',
        'header' => 'Сайт обо мне',
        'block_hello' => '<div class="p-5 mb-4 bg-body-tertiary rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Здравствуйте!</h1>
            <p class="col-md-8 fs-4">
                Меня зовут Даниил, мне 19 годиков.
            </p>
        </div>
    </div>',
        'block_profesional' => '<div class="col-md-6">
            <div class="h-100 p-5 text-bg-dark rounded-3">
                <h2>Профессиональная деятельность</h2>
                <p>Я работал Backend разработчиком на платформе Node.js на протяжении полугода.</p>
                <p>Занимался разработкой Headless CMS, внутреннего продукта компании.</p>
            </div>
        </div>',
        'block_technologies' => '<div class="col-md-6">
            <div class="h-100 p-5 bg-body-tertiary border rounded-3">
                <h2>Стек технологий</h2>
                <p>
                    JavaScript, PostgreSQL, TypeScript, Node.js, Nest.js.
                </p>
            </div>
        </div>',
];
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title><?=$content['title']?></title>
</head>
<body>
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/task_7.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <span class="fs-4"><?=$content['header']?></span>
        </a>
    </header>
</div>

<div class="container pb-2">
    <?=$content['block_hello']?>
    <div class="row align-items-md-stretch">
        <?=$content['block_profesional']?>
        <?=$content['block_technologies']?>
    </div>
</div>
</body>
</html>