<?php

if($_GET['abonent_id']) {
    $path = 'data/abonents.txt';

    $content_in_arr = explode('% next %', file_get_contents($path));

    unset($content_in_arr[$_GET['abonent_id']-1]);
    $content_in_arr = array_values($content_in_arr);

    file_put_contents($path, implode('% next %', $content_in_arr));

    header('Location: index.php');
}
