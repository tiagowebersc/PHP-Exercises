<?php
/*

	1. Create an HTML form with a text field in a PHP script. The form will point to the same page.

	2. Create a `submit` button that sends the string input, and displays in a <div> this string in uppercase.

	3. Create a second `submit` button, which displays the string entered in lowercase

	4. Similarly, a submit to add a capital letter to each word
	
	5. And again a submit to add a capital letter, but only at the beginning of the chain.

	6. Now create a submit that will display the string only up to the '.' (point) not included
	  - Use the `explode` function for that.
	  - Now use the `strpos` and` substr` function to produce the same result.

	Bonus: Finally, create a submit that displays the first two words of the string entered, separated by a hyphen ("-")
  	If there are not enough words, display the message "Enter at least two words"
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>String exercice 1</title>
</head>

<body>
	<?php
	if (isset($_POST['submitButton']) && isset($_POST['text'])) {
		?>
		<div>
			<?php
			if ($_POST['submitButton'] === 'Upper Case') echo strtoupper($_POST['text']);
			if ($_POST['submitButton'] === 'Lower Case') echo strtolower($_POST['text']);
			if ($_POST['submitButton'] === 'Each Word') echo ucwords($_POST['text']);
			if ($_POST['submitButton'] === 'First Word') echo ucfirst($_POST['text']);
			if ($_POST['submitButton'] === 'Dot Cutter') {
				echo explode('.', $_POST['text'])[0];
			}
			if ($_POST['submitButton'] === 'Dot Cutter 2') {
				$posi = strpos($_POST['text'], '.');
				if (!$posi) $posi = strlen($_POST['text']);
				echo substr($_POST['text'], 0, $posi);
			}
			if ($_POST['submitButton'] === 'Two Words Concatenate') {
				$array = explode(' ', $_POST['text']);
				if (count($array) < 2) {
					echo "Should have at least two words!";
				} else {
					echo $array[0] . '-' . $array[1];
				}
			}
			?>
		</div>
	<?php
	}
	?>

	<form action="" method="post">
		<input type="text" name="text" id="text">
		<input type="submit" value="Upper Case" name="submitButton">
		<input type="submit" value="Lower Case" name="submitButton">
		<input type="submit" value="Each Word" name="submitButton">
		<input type="submit" value="First Word" name="submitButton">
		<input type="submit" value="Dot Cutter" name="submitButton">
		<input type="submit" value="Dot Cutter 2" name="submitButton">
		<input type="submit" value="Two Words Concatenate" name="submitButton">
	</form>
</body>

</html>