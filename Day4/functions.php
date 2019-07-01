<?php
// declare a function
function helloWorld()
{
    echo 'Hello world!';
}
function greetings($message = 'Hey bro!') // default value for parameters
{
    echo 'Your message: ' . $message;
}
function multiply($x, $y = 2) // default values must be from the end to begining
{
    return ($x * $y);
}
//--------
$x = 5;
function test($y = 2)
{
    global $x; // it will take the value of the outer context
    return ($x * $y);
}
function displayMessage($message, &$x)
{
    $x += 10;
    return $message . ': ' . $x;
}

// call to the function
helloWorld();
echo '<br>';
greetings('Hello!');
echo '<br>';
greetings();
echo '<br>';
echo multiply(4);
echo '<br>';
echo multiply(5, 3);
echo '<br>';
echo test();
echo '<br>';
$myNumber = 5;
echo '<br>';
echo 'My number outside the function: ' . $myNumber;
echo '<br>';
echo displayMessage('Hello, my number inside the function', $myNumber);
echo '<br>';
echo 'My number outside the function: ' . $myNumber;
