<?php

$x = 5;
$y = 10;
$z = 2;

// add
$results = $x + $y;
// Substract
$results = $x + $z;
// Division
$results = $y / $x;
// Multiplication
$results = $z * $x;

// Easier way of doing maths
$x = $x + 10;

$x += 10;
$y -= 5;
$z *= 2;
$x /= 5;

$x++;
$y--;

$message = 'Hello';
$message .= ', World!';
echo $message;

$firstName = 'Tiago';
// this doesn't work
echo 'Hello, $firstName';
// this works
echo "Hello, $firstName";
echo 'Hello, '.$firstName;

?>