<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log-in</title>
    <style>
        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        form {
            padding: 2rem;
            background-color: cadetblue;
            border-radius: 2rem;
        }

        input {
            width: 15rem;
            display: block;
        }

        [type=submit] {
            margin-top: 2rem;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>
    <?php
    $error = "";
    $email = "";
    $password = "";

    require_once 'database.php';
    if (isset($_POST['submitButton'])) {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        if (empty($email)) $error = "Email must be informed!";
        else if (empty($password)) $error = "Password must be informed!";
        if (empty($error)) {
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
            $dbFound = mysqli_select_db($conn, DB_NAME);
            if (!$dbFound) {
                $error = 'Problem to connect to the database!!';
            } else {
                $query = "select userId, firstName, lastName from users where email = '" . $email . "' and password = '" . $password . "';";
                $results = mysqli_query($conn, $query);
                if ($row = mysqli_fetch_assoc($results)) {
                    session_start();
                    $_SESSION['id'] = $row['userId'];
                    $_SESSION['user'] = $row['firstName'] . " " . $row['lastName'];
                    $_SESSION['email'] = $email;
                    mysqli_close($conn);
                    header("Location: index.php");
                } else {
                    $error = 'Email not registered/Wrong password!!';
                }
            }
            mysqli_close($conn);
        }
    }
    ?>
    <form action="" method="post">
        <h2>Sign-in</h2>
        <label for="email">First name:</label>
        <input type="email" name="email" id="email" value="<?php echo $email; ?>" placeholder='Enter your email'>
        <label for="password">First name:</label>
        <input type="password" name="password" id="password" value="<?php echo $password; ?>" placeholder='Enter your password'>
        <span class="error"><?php echo $error; ?></span>
        <input type="submit" value="Log in" name="submitButton">
    </form>
</body>

</html>