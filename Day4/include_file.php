<?php
//include_once 'example.php'; 
require_once 'example.php';
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
    <h1>Body</h1>

    <?php
    // using variable from example.php
    echo $string;
    ?>
    <?php
    include 'footer.html';
    include_once 'footer.html';
    ?>
</body>

</html>