<?php
// Some comments on a line
echo "<p>Hello world!</p>";
/* 
    Some comments
    on multiple lines
*/

// string
$firstName = 'Tiago';
$lastName = 'WEBER';
// integer
$populationFrance = 66900000;
// double
$pi = 3.14;
// boolean
$isValid = true;
//---- Arrays ----
$fruits = array('apple', 'ananas', 'coconut');
$vegetables= ['spinach','carrots'];
$gender = array('Michel' => 'Male', 'Sarah' => 'Female', 'Ricardo' => 'Male') ;
$food = array(
    'fruits' => array('apple', 'ananas', 'coconuts'),
    'vegetables' => array('spinach', 'carrots')
);

$gender['Simon'] = 'Male';

echo'<pre>';
var_dump($food);
echo'</pre>';

echo '<p>' . $food['fruits'][1] . '</p>';
echo '<p>' . $gender['Michel'] . '</p>';
echo '<p>' . $fruits[1] . '</p>';
echo '<p>' . $firstName . ' ' . $lastName . '</p>';
echo "<p>$firstName  $lastName</p>";

?>