<?php

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 1 </p>';

/*
-- Exercise 1 :

Write a recursive function that will:
- Take an integer (for xple $x) and display it.
- If $x is less than 50, display all numbers from $x to 50
*/
function displayTo50($number)
{
    if ($number <= 50) {
        echo $number . ' ';
        displayTo50($number + 1);
    }
}
displayTo50(23);

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 2 </p>';

/*
-- Exercise 2 :

Write a recursive function that will calculate the multiplication of two numbers using only the addition.

*/

function multiplySum($n1, $n2)
{
    if ($n2 > 0) {
        return $n1 + multiplySum($n1, $n2 - 1);
    }
}

echo '7  * 3: ' . multiplySum(7, 3) . '<br>';
echo '13 * 2: ' . multiplySum(13, 2) . '<br>';
echo '3  * 5: ' . multiplySum(3, 5) . '<br>';

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 3 </p>';

/*
-- Exercise 3 : 

Ecrire une fonction récursive qui va calculer le factorielle d'un nombre.
La factorielle de 5 se note 5! et équivaut à 5! = 5 * 4 * 3 * 2 * 1.
La factorielle de 5 est donc égal à 120 (5! = 120). 
Voici l'équation d'une factorielle : n! = n * (n – 1) * … * 3 * 2 * 1

Write a recursive function that will calculate the factorial of a number.
The factorial of 5 is 5! and equals to    5! = 5 * 4 * 3 * 2 * 1.
The factorial of 5 is therefore equal to 120 (5! = 120).
Here is the equation of a factorial: n! = n * (n - 1) * ... * 3 * 2 * 1
*/

function factorial($n1)
{
    if ($n1 > 1) {
        return $n1 * factorial($n1 - 1);
    } else {
        return 1;
    }
}

echo '3!: ' . factorial(3) . '<br>';
echo '7!: ' . factorial(7) . '<br>';
echo '4!: ' . factorial(4) . '<br>';
echo '9!: ' . factorial(9) . '<br>';
