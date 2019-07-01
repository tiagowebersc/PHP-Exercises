<!--
 -- Exercise 1 :
	
	1.1 : 
	Create a basic connection form with email and password input.

	1.2 :
	Check if a string contains the '@' symbol thanks to the 'strpos' function.
	If yes, display 'valid email';
	If no, display 'invalid email';

	1.3 :
	When the user validates the form: display a message in red if invalid, show in green if valid.
-->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Exercise Form 3</title>
</head>

<body>
	<?php
	$error = false;
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (empty($_POST["email"]) || strpos($_POST["email"], '@') == false) {
			$error = true;
		}
	}

	if (empty($_POST) || $error) {
		?>
		<form action="" method="post">
			<label for="email">Email:</label>
			<input type="email" name="email" id="email">
			<label for="password">Password:</label>
			<input type="password" name="password" id="password">
			<input type="submit" value="Send">
		</form>
		<?php if ($error) { ?>
			<span style="background-color:red; color:white;">Invalid email</span>
		<?php }
} else { ?>
		<span style="background-color:green; color:white;">Valid email</span>
	<?php } ?>
</body>

</html>