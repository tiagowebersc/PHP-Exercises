<?php
/*
    Step 1: Create a page that indicates how often it has been visited by the user.
    No need for forms, just the $ _SESSION array

    Step 2: Also post the date of first visit by the client.

    Step 3: Add a 'Reset' submit (in a form, of course)
    When you click on the button, the counter is reset.
 */
session_start();
if (isset($_POST['reset'])) {
    session_unset();
    session_destroy();
}

$visits = [];
if (isset($_SESSION['visits']))
    $visits = $_SESSION['visits'];
$visits[count($visits)] = time();
$_SESSION['visits'] = $visits;

//var_dump($_SESSION);

echo 'First visit: ' . date('Y-m-d H:i:s', $visits[0])  . '<br>';
echo 'total of visitors: ' . count($visits);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="submit" value="reset visits" name="reset">
    </form>
</body>

</html>