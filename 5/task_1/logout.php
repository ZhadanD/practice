<?php

require_once 'functions.php';

session_start();

$current_user = check_user();

if(!empty($current_user)) {
    $_SESSION = array();
    session_destroy();
}

header('Location: index.php');
