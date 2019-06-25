<?php
$x;
$y = 5;

// If a variable is set (means it has a value)
// if is initialised
var_dump(isset($x));
var_dump(isset($y));

echo '<hr>';
if (empty($x))
    echo 'X is empty';
else
    echo 'X is not empty';
echo '<hr>';

// Count the number of character in array
$message = 'My message';
echo strlen($message);
echo '<hr>';
