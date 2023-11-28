<?php

require_once 'config.php';

// Тестирование примера

$p = mysqli_connect($host, $username, $password);

mysqli_select_db($p, $database) or die('NO BASE');

mysqli_close($p);
