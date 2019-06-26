<?php
// $_GET
var_dump($_POST);
$firstName = "";

if (!empty($_POST)) {
    $firstName = trim($_POST['firstName']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $filteredMail = filter_var($email, FILTER_SANITIZE_EMAIL);
    $filteredMail = filter_var($filteredMail, FILTER_VALIDATE_EMAIL);
    var_dump($filteredMail);

    if ($firstName == 'Tiago' && strlen($password) > 6) {
        echo "<h1>Welcome " . $firstName . '</h1>';
    } else {
        echo "<h2>You're not allowed to view this page</h2>";
    }
}
