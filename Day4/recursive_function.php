<?php
function displayNumber($number)
{
    for ($i = 0; $i <= $number; $i++) echo $i . ' ';
}
//Recursive function
function displayNumberRecursive($number)
{
    if ($number >= 0) {
        echo $number . ' ';
        displayNumberRecursive($number - 1);
    }
}



displayNumber(10);
echo '<br>';
displayNumberRecursive(10);
