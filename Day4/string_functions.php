<?php
/*
    Change the case of a string 
    */
$string = 'Here, take a beer.';
//make it all capital letters
echo strtoupper($string) . '<br>';
//make it all lower
echo strtolower($string) . '<br>';
//first letter capital
echo ucfirst($string) . '<br>';
//first letter capital for each word
echo ucwords(($string)) . '<br>';
//find the position of a character in a string
echo strpos($string, 'beer') . '<br>';
var_dump(strpos($string, '@')) . '<br>'; // false if not found
// retrieve only one part of a string (sub-string)
$string = 'Here, take another beer.';
echo substr($string, 19) . '<br>';
echo substr($string, -5) . '<br>';
echo substr($string, 11, 7) . '<br>';
// replace a string into a string
echo str_replace('another beer', 'a coca-cola', $string) . '<br>';
// delete a character at the beginning and the end of a string
echo trim($string, '.') . '<br>';
// delete on the left side - ltring($string);
// delete on the right side - rtring($string);
$string = 'Hello Tiago I hope you\'re ok.';
$array = explode(' ', $string);
var_dump($array);
$string2 = implode('_', $array);
echo $string2 . '<br>';
