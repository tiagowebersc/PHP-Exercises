<?php
// Sort (trié) array
$fruits = ['coconut', 'apple', 'lemon'];
var_dump($fruits);
echo '<hr>';
sort($fruits);
var_dump($fruits);
echo '<hr><hr>';
// Sort of associative array
$gender = ['Michel' => 'Male', 'Sarah' => 'Female', 'Tiago' => 'Male'];
var_dump($gender);
echo '<hr>';
// Key sort
//ascendeing
ksort($gender);
var_dump($gender);
// descending
krsort($gender);
var_dump($gender);

echo '<hr>';
// Value sort
//ascendeing
asort($gender);
var_dump($gender);
// descending
arsort($gender);
var_dump($gender);
print_r($gender);
echo '<hr><hr>';
// To count the number of elements in my array
echo count($gender);
