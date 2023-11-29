<?php

setcookie('username', $_COOKIE['username'], strtotime('-3 minute'));

header("Location: sign_in.php");
