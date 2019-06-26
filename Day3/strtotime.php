<?php
/*
strtotime function will 'transform' date, or string, into timestamp
Argument must be in english
*/
echo strtotime('now') . '<br>';
$timeStamp = strtotime('19 October 1990');
echo $timeStamp . '<br>';
echo date('d/m/Y', $timeStamp) . '<br>';

$timeStamp2 = strtotime('next Monday');
echo date('d/m/Y', $timeStamp2) . '<br>';
