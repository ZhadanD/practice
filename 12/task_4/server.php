<?php

if($_FILES && $_FILES['file']['error'] == UPLOAD_ERR_OK) {
    $path = 'static/' . $_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'], $path);
}
