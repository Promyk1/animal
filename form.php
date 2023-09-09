<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>


<body>
    <?php
        $name = $_POST['name'];
        $email = $_POST['email'];

        $name = htmlspecialchars($name);
        $email = htmlspecialchars($email);
    ?>
    <p>Cześć, <?php echo $name ?></p>
    <p>Wiadomość e-mail została pomyślnie wysłana na adres<?php echo $email ?> !</p>
    
</body>
</html>