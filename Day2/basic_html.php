<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Characteristics</title>
    <style>
        img {
            height: 400px;
        }

        ;
    </style>
</head>

<body>
    <?php
    $image = 'https://cdn.shopify.com/s/files/1/0225/4035/products/Image4_3b57a2a7-be53-4215-bfec-3aae985bc4d2.jpg';
    $lastName = 'Kestrasz';
    $firstName = 'Zarshe';
    $characteristics = ['AttackPoint' => 10, 'DefensePoint' => 4, 'Speed' => 2, 'Luck' => 7];

    echo '<img src="' . $image . '" >';
    echo  '<h1>' . $firstName . ' ' . $lastName . '</h1>';
    var_dump($characteristics);
    ?>
    <hr>
    <img src="<?php echo $image; ?>" alt="">
    <h1><?php echo $firstName . ' ' . $lastName ?></h1>
    <ul>
        <li>Attack: <?php echo $characteristics['AttackPoint']; ?></li>
        <li>Defense: <?php echo $characteristics['DefensePoint']; ?></li>
        <li>Speed: <?php echo $characteristics['Speed']; ?></li>
        <li>Luck: <?php echo $characteristics['Luck']; ?></li>
    </ul>

</body>

</html>