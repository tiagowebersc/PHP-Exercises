<?php
// hast before store password
// Today, we don't use SHA1 or MD5 to hash password
// it's now vulnerable because of machines with high computing power

// We want to use a 'salt': an additional string, wich aims to make the password more complex before hashing

//weak salt and weak algorithm for generationg a hash, for example:
// $salt = myS4lt387ez;
// $hash = md5($password . $salt);
// or
// $hash = sha1($password . $salt);

// The password_hash() function simplify your code making it more secure.
// When you need to hash a password, just use this function and it'll return you the hash which you can store in your database
//(it's using the 'bcrypt' algorithm)
if (isset($_POST['submit'])) {
    $hashedPass = password_hash($_POST['password'], PASSWORD_DEFAULT);
    // salt is ramdomly generated
    echo $hashedPass;
}
if (isset($_POST['confirmPassword'])) {
    $hashDB = '$2y$10$MfFipdFd5macNJRib.LEdemEofUgmpg.HuBWGXLs4GHECOUoVPZWC';
    if (password_verify($_POST['password'], $hashDB)) {
        echo 'Password match';
    } else {
        echo 'Nope';
    }
}
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
        <h6>Register</h6>
        <input type="text" name='password'>
        <input type="submit" value="Submit" name="submit">
    </form>
    <form action="" method="post">
        <h6>Login</h6>
        <input type="text" name='password'>
        <input type="submit" value="Submit" name="confirmPassword">
    </form>
</body>

</html>