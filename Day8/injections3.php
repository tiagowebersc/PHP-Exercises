<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    $url = "url.php";
    echo "<a href='" . htmlspecialchars($url) . "'>Click</a>";
    ?>
    <br><br>
    <?php
    $url = "url.php' onmouseover='alert(document.cookie)";
    echo "<a href='" . htmlspecialchars($url) . "'>Click</a>";
    ?>
    <br><br>
    <?php
    $url = "url.php' onmouseover='alert(document.cookie)";
    echo "<a href='" . htmlspecialchars($url, ENT_QUOTES) . "'>Click</a>";
    ?>
    <br><br>
</body>

</html>