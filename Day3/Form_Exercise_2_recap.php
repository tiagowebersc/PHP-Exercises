<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise Form 2 - Recap</title>
    <style>
        span{
            display: block;
        }
    </style>
</head>
<body>
    <?php
        if (!empty($_POST)){
            var_dump($_POST);
            $firstName = trim($_POST['firstName']);
            $lastName = trim($_POST['lastName']);
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            $confirmationPassword = trim($_POST['confirmationPassword']);
            $newsletter = 'No';
            if (array_key_exists('newsletter', $_POST) && trim($_POST['newsletter'])=='on') $newsletter = 'Yes';
        ?>
        <span>First name: <strong><?php echo $firstName ?></strong></span>
        <span>Last name: <strong><?php echo $lastName ?></strong></span>
        <span>Email: <strong><?php echo $email ?></strong></span>
        <span>Password: <strong><?php echo $password ?></strong></span>
        <span>Confirmed password: <strong><?php echo $confirmationPassword ?></strong></span>
        <span>Subscribed for the newsletter: <strong><?php echo $newsletter ?></strong></span>
        <?php
        }
    ?>
</body>
</html>