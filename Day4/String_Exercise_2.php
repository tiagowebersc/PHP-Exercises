<?php

/**
	 EXERCISE 1 :

		Write a PHP script that checks if an email address contains the @ symbol.
		If yes, display: "Valid email, symbol found at X". Otherwise display "Invalid email".

		To do your tests, you can create a "can" variable of the type $ mail = "simon@gmail.com";
 **/
$mail = 'tiagowebersc@gmail.com';
echo $mail . '<br>';
echo validMail($mail);
echo '<br>';
$mail = 'tiagoweberscgmail.com';
echo $mail . '<br>';
echo validMail($mail);
echo '<br>';

function validMail($mail)
{
	$posi = strpos($mail, '@');
	if ($posi) {
		return "Valid email, symbol found at " . $posi;
	} else {
		return 'Invalid email';
	}
}
echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 1 </p>';

/**
	 EXERCICE 2 :

		Write a PHP script that removes all slashes from this string:
		$movies = "/Star Wars/Fight Club/Intouchables/Night Call//";
 **/
$movies = "/Star Wars/Fight Club/Intouchables/Night Call//";
echo $movies;
echo '<br>';
echo str_replace('/', '', $movies);

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 2 </p>';
/**
	 EXERCICE 3 :

		Write a PHP script that replaces the word "random" with the word "beautiful" in this sentence:

		$sentence = "This is a random sentence";
 **/
$sentence = "This is a random sentence";
echo $sentence;
echo '<br>';
echo str_replace('random', 'beautiful', $sentence);
echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 3 </p>';

/**
	 EXERCICE 4 :

		Write a PHP script that displays the last word of a sentence using 2 functions:
			explode () and count ()
		
		You can use the previous sentence to test : $sentence = "This is a random sentence";
 **/
$sentence = "This is a random sentence";
echo $sentence;
echo '<br>';
$array = explode(' ', $sentence);
echo $array[count($array) - 1];
