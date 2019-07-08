<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign-in</title>
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
    $firstName = "";
    $lastName = "";
    $email = "";
    $password = "";

    require_once 'database.php';
    if (isset($_POST['submitButton'])) {
        $firstName = htmlspecialchars($_POST['firstName']);
        $lastName = htmlspecialchars($_POST['lastName']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        if (empty($firstName)) $error = "First name must be informed!";
        else if (empty($lastName)) $error = "Last name must be informed!";
        else if (empty($email)) $error = "Email must be informed!";
        else if (empty($password)) $error = "Password must be informed!";
        // todo: do the email validation
        if (empty($error)) {
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
            $dbFound = mysqli_select_db($conn, DB_NAME);
            if (!$dbFound) {
                $error = 'Problem to connect to the database!!';
            } else {
                $query = "select * from users where email = '" . $email . "';";
                $results = mysqli_query($conn, $query);
                if (mysqli_fetch_assoc($results)) {
                    $error = 'Email already registered!!';
                } else {
                    $query = 'INSERT INTO users(firstName, lastName, email, password) VALUES ("' . $firstName . '", "' . $lastName . '", "' . $email . '", "' . $password . '")';
                    $result = mysqli_query($conn, $query);
                    if (!$result)
                        $error =  "Insert went wrong!";
                    else {
                        $query = "select userId from users where email = '" . $email . "' and password = '" . $password . "';";
                        $results = mysqli_query($conn, $query);
                        $row = mysqli_fetch_assoc($results);
                        session_start();
                        $_SESSION['id'] = $row['userId'];
                        $_SESSION['user'] = $firstName . " " . $lastName;
                        $_SESSION['email'] = $email;
                        mysqli_close($conn);
                        header("Location: index.php");
                    }
                }
            }
            mysqli_close($conn);
        }
    }
    ?>
    <form action="" method="post">
        <h2>Sign-in</h2>
        <label for="firstName">First name:</label>
        <input type="text" name="firstName" id="firstName" value="<?php echo $firstName; ?>" placeholder='Enter your first name'>
        <label for="lastName">First name:</label>
        <input type="text" name="lastName" id="lastName" value="<?php echo $lastName; ?>" placeholder='Enter your last name'>
        <label for="email">First name:</label>
        <input type="email" name="email" id="email" value="<?php echo $email; ?>" placeholder='Enter your email'>
        <label for="password">First name:</label>
        <input type="password" name="password" id="password" value="<?php echo $password; ?>" placeholder='Enter your password'>
        <span class="error"><?php echo $error; ?></span>
        <input type="submit" value="Sign in" name="submitButton">
    </form>
</body>

</html>