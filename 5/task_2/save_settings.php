<?php

session_start();

$nick = strip_tags(trim($_POST['nick']));
$background = strip_tags(trim($_POST['background']));

$_SESSION['nick'] = $nick;

switch($background) {
    case 'green':
        $_SESSION['background'] = '#00FF00';
        break;
    case 'red':
        $_SESSION['background'] = '#FF0000';
        break;
    case 'blue':
        $_SESSION['background'] = '#0000FF';
        break;
    default:
        $_SESSION['background'] = '#000000';
}

header('Location: index.php');
