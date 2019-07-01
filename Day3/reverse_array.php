<?php
$array1 = [5, 6, 8, 9, 2];

var_dump($array1);

for ($i = 0; $i <= (sizeof($array1) / 2); $i++) {
    $temp = $array1[$i];
    $array1[$i] = $array1[sizeof($array1) - $i - 1];
    $array1[sizeof($array1) - $i - 1] = $temp;
}

var_dump($array1);
