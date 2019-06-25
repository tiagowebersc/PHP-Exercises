	<!--
	- Exercise 1 :
	Based on the character exercise, display all his caracteristics using a loop.
	-->
	<?php
    $image = 'https://cdn.shopify.com/s/files/1/0225/4035/products/Image4_3b57a2a7-be53-4215-bfec-3aae985bc4d2.jpg';
    $lastName = 'Kestrasz';
    $firstName = 'Zarshe';
    $characteristics = ['AttackPoint' => 10, 'DefensePoint' => 4, 'Speed' => 2, 'Luck' => 7];
    ?>
	<img style="height:300px" src="<?php echo $image; ?>" alt="">
	<h1><?php echo $firstName . ' ' . $lastName ?></h1>
	<ul>
	    <?php foreach ($characteristics as $idx => $value) { ?>
	        <li><?php echo $idx; ?>: <?php echo $value; ?></li>
	    <?php } ?>
	</ul>
	<hr>
	<!--
	- Exercise 2 :
	Michel went to the supermarket and bought some food.
	He used an array to save his spending.

	$array = array("Salad"=>"1.03","Tomato"=>"2.3","Oignon"=>"1.85","Red cabbage"=>"0.85")
	Write a script that will :
	1. Sort by value
	2. Sort by key in descending order
	3. Use a loop to calculate the total of his spendings.
    -->
	<?php
    $array = array("Salad" => "1.03", "Tomato" => "2.3", "Oignon" => "1.85", "Red cabbage" => "0.85");
    //1. Sort by value
    asort($array);
    var_dump($array);
    //2. Sort by key in descending order
    krsort($array);
    var_dump($array);
    //3. Use a loop to calculate the total of his spendings
    $total = 0;
    foreach ($array as $value) {
        $total += $value;
    }
    echo 'Total: ' . $total;
    ?>
	<hr>
	<!--
	- Exercise 3 :

	Using a loop, fill in a array with every number from 0 to 20.
	The element 0 will therefore contain 0, the element 1 will contain 2 etc.

	Do it by using a for AND a while loop
    -->
	<?php
    $array = [];
    for ($i = 0; $i <= 20; $i++) {
        if ($i  % 2 == 0) $array[count($array)] = $i;
    }
    print_r($array);
    echo '<br>';
    $array = [];
    $i = 0;
    while ($i <= 20) {
        if ($i  % 2 == 0) $array[count($array)] = $i;
        $i++;
    }
    print_r($array);
    ?>
	<hr>
	<!--
	-Exercise 4 :
	Use a loop to create a array.
	This array will contain the multiplication table of 2.
	From 1 to 10.
    -->
	<?php
    $array = [];
    for ($i = 1; $i <= 10; $i++) {
        $array[$i] = $i * 2;
    }
    ?>
	<ul>
	    <?php foreach ($array as $idx => $value) { ?>
	        <li>2 x <?php echo $idx; ?>: <?php echo $value; ?></li>
	    <?php } ?>
	</ul>
	<hr>
	<!--
	-Exercise 5 :
	Create a random numerical array.
	Find the smallest value.
    Find the greatest value.
    -->
	<?php
    $array = [];
    $min;
    $max;
    for ($i = 0; $i <= 10; $i++) {
        $array[$i] = rand(0, 100);
    }
    foreach ($array as $number) {
        if (empty($min) || $min > $number) $min = $number;
        if (empty($max) || $max < $number) $max = $number;
    }
    var_dump($array);
    ?>
	<p>Greatest value: <?php echo $max ?></p>
	<p>Smallest value: <?php echo $min ?></p>