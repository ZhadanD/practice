<?php
if(!$_POST['mail_ok']) {
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 3</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container pt-5">
    <form method="post">
        <label for="to" class="pt-2">To</label>
        <input type="text" name="to" id="to" class="form-control">

        <label for="subject" class="pt-2">Subject</label>
        <input type="text" name="subject" id="subject" class="form-control">

        <label for="message" class="pt-2">Message</label>
        <textarea name="message" id="message" class="form-control"></textarea>

        <input type="submit" name="mail_ok" class="btn btn-success mt-3" value="Send">
    </form>
</div>
</body>
</html>

<?php
} else {
    $to = $_POST['to'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mail = mail($to, $subject, $message);

    if($mail) {
        echo "<h1>Письмо успешно отправлено!</h1>";
    } else {
        echo "<h1>Письмо не отправлено!</h1>";
    }
}
?>