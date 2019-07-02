<?php
echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 1 </p>';
/*
-- Exercise 1 :
	1.1
	Write a PHP script which multiply two numbers
	Example : 2*4 = 8

	1.2
	Write a function which :
	    - Take 2 numbers in parameters
	    - Returns the result of the multiplication of the two numbers
	    
	1.3
	Create a form that:
	- Allows to enter 2 numbers
	- Get the result of the multiplication of these 2 numbers
		(use the function created in 1.2)
	- Warning, it is necessary to manage the case where the user does not enter the two numbers.
*/
?>
<form action="" method="post">
	<input type="text" name="number1" id="number1">
	<input type="text" name="number2" id="number2">
	<input type="submit" value="Multiply" name="Multiply">
</form>
<?php
function multiply($a, $b)
{
	return ($a * $b);
}
if (isset($_POST['Multiply'])) {
	$n1 = $n2 = 1;
	if (isset($_POST['number1'])) $n1 = (int) $_POST['number1'];
	if (isset($_POST['number2'])) $n2 = (int) $_POST['number2'];
	echo 'Result: ' . multiply($n1, $n2);
	echo '<br>';
}

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 2 </p>';

/*
- Exercise 2

Write a function that:
    - Takes into parameter two numbers.
    - Check which is the largest number.

The expected result is this:
    The first number is larger (if the first number is larger than the second number)
    The first number is smaller (if the first number is smaller than the second number)
    The two numbers are identical (if the two numbers are equal)
*/
?>
<form action="" method="post">
	<input type="text" name="number1" id="number1">
	<input type="text" name="number2" id="number2">
	<input type="submit" value="Who is Bigger" name="WhoIsBigger">
</form>
<?php

function biggerNumber($n1, $n2)
{
	if ($n1 === $n2) return 'The two numbers are identical';
	else if ($n1 > $n2) return 'The first number is larger';
	else return 'The first number is smaller';
}
if (isset($_POST['WhoIsBigger'])) {
	$n1 = $n2 = 1;
	if (isset($_POST['number1'])) $n1 = (int) $_POST['number1'];
	if (isset($_POST['number2'])) $n2 = (int) $_POST['number2'];
	echo biggerNumber($n1, $n2);
}

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 3 </p>';

/*
-- Exercise 3

	3.1
	Write a PHP script that:
	    - Create an array of John's expenses.
	    - Calculates the sum of John's expenses over the year

	3.2
	Write a function that will:
	- Take an expense array as input
	- Calculate the sum of the expenses of the table
	- return this sum

*/
$expenses = [12.3, 1, 46.78, 11, 98, 114];
$sum = 0;
foreach ($expenses as $expense) $sum += $expense;
echo 'Sum: ' . $sum;
echo '<br>';

function sumExpenses($expenses)
{
	$sum = 0;
	foreach ($expenses as $expense) $sum += $expense;
	return $sum;
}
echo 'Sum: ' . sumExpenses($expenses);
echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 4 </p>';

/*
-- Exercice 4

Write a PHP script that checks if a string is a palindrome.
A palindrome is a chain of letters whose order of letters remains the same whether read from left to right or from right to left.

Example : 
"kayak"
"xanax"
"poop"

*/
?>
<form action="" method="post">
	<input type="text" name="word" id="word">
	<input type="submit" value="Is it palindrome?" name="IsItPalindrome">
</form>
<?php

function palindrome($word)
{
	for ($i = 0; $i <= (strlen($word) / 2); $i++) {
		if ($word[$i] !== $word[strlen($word) - $i - 1]) return false;
	}

	return true;
}

if (isset($_POST['IsItPalindrome'])) {
	$word = $_POST['word'];
	if (palindrome($word)) echo 'It is palindrome!';
	else echo 'It isn\'t palindrome!';
}

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 5 </p>';

/*
-- Exercice 5

Write a function that checks if a number is a prime number.
A prime number is an integer greater than 1 that can only be divided by itself and 1.

*/
?>
<form action="" method="post">
	<input type="text" name="number" id="number">
	<input type="submit" value="Ist it a prime number?" name="IsItAPrimeNumber">
</form>
<?php

function primeNumber($number)
{
	for ($i = 2; $i < $number; $i++) {
		if ($number % $i === 0) {
			return false;
		}
	}

	return true;
}

if (isset($_POST['IsItAPrimeNumber'])) {
	$number = $_POST['number'];
	if (primeNumber($number)) echo 'It is a prime number!';
	else echo 'It isn\'t a prime number!';
}

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 6 </p>';

/*

-- Exercice 6
Write a htmlImages($src) function that:
    - takes a string as argument ($src)
    - display an html <img> tag with $src source
Example :
    htmlImages('skate.jpg') 
    	> Displays <img src='skate.jpg'>

*/

function htmlImages($image)
{
	echo '<img style=\'width:300px;\'; src="' . $image . '">';
}

htmlImages('TRIKE.jpg');

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 7 </p>';

/*
-- Exercice 7

Ecrire une fonction qui :
    - Prend en paramètre deux nombres.
    - Qui retourne le résultat de la multiplication des deux nombres
    - Tous les paramètres doivent avoir une valeur par défaut.
    - Appeler votre fonction avec les nombres 10 et 2.
    - Appeler votre fonction avec un seul nombre : 4

Write a function that:
    - Takes two numbers as parameter.
    - That returns the result of the multiplication of the two numbers
    - All parameters must have a default value.
    - Call your function with the numbers 10 and 2.
    - Call your function with a single number: 4
*/
function multiply2($a = 1, $b = 1)
{
	return ($a * $b);
}
echo 'Result: ' . multiply2(10, 2);
echo '<br>';

echo 'Result: ' . multiply2(4);
echo '<br>';

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 8 </p>';

/*
-- Exercice 8 :
	Write a PHP function that return the reverse(mirror) of an array.
*/
function mirror($array)
{
	for ($i = 0; $i <= (count($array) / 2); $i++) {
		$temp = $array[$i];
		$array[$i] = $array[count($array) - $i - 1];
		$array[count($array) - $i - 1] = $temp;
	}
	return $array;
}

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
var_dump($array);
$array2 = mirror($array);
var_dump($array2);

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 9</p>';

/*	
-- Exercise 9
Ecrire une fonction countWords($text) qui :
    - prend une chaine de caractère en argument ($text)
    - calcule le nombre de mots dans la chaine de caractère $text
    - retourne le résultat
Indice : il faut utiliser une fonction qui permet de découper une phrase en mots (déjà vu en cours)

Write a function 'countWords($text)' that:
    - takes a string of characters in argument ($text)
    - calculate the number of words in the $text string
    - return the result
Hint: use a function that allows you to split a sentence into words (already seen in class)
*/

function countWords($text)
{
	return count(explode(' ', $text));
}

$text = 'Count how much words this sentence has.';

echo $text;
echo '<br>';
echo countWords($text);;

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 10 </p>';

/*
-- Exercice 10 :
Repeat the previous exercise and write a countEachWords($test) function that:
    - takes a string of characters in argument ($text)
    - for each word present in $text, calculate how many times this word appears
    - return the result as an associative array

For example : "this is a random sentence, it is totally random".
Expected result :
    array( "this" -> 1, 
            "is" -> 2,
            "a" -> 1,
            "random" -> 2
			....... );
		*/
$text = 'Lorem ipsum dolo sit. Cum dolo dolo a tot! Nece dolo, dolo volu! tot Dele repu tot repu.';

function countEachWords($text)
{
	$result = [];
	$array = explode(' ', $text);
	foreach ($array as $word) {
		$sum = 1;
		if (isset($result[$word])) $sum += $result[$word];
		$result[$word] = $sum;
	}
	return $result;
}

echo $text;
var_dump(countEachWords($text));
?>