<!-- Exercise 1 :
	1. Create an HTML form with two textbox (first and last name) and a 'submit' button.
	When the 'submit' button is clicked, display the full name of the person.
	Do not worry about what's in the textbox once the button is clicked.

	2.Now, display the first and last name in the textbox, even after the button is clicked.

	3. Suppose our site has only 5 authorized users.
	These users are contained in a table.
	For example: $ users = array ("johnny hallyday", "simon bertrand", "tom hanks", "toto tata", "john");
	Check if the user, who enters his data, is one of the 5 users and display a suitable message.

		> Step 1: Create a PHP script that browses an array and checks whether a string is there (use a loop and a logical condition).
	    
	    > Step 2: Use step 1 to check if an user is allow
-->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Exercise Form 1</title>
	<style>
		input {
			display: block;
		}
	</style>
</head>

<body>
	<?php
	// array of allowed user
	$users = ["johnny hallyday", "simon bertrand", "tom hanks", "toto tata", "john"];
	$firstName = "";
	$lastName = "";
	// for curiosity - show the values in the html
	var_dump($_POST);
	// for the first time that the page is loaded don't do anything
	if (!empty($_POST)) {
		// get values from POST
		$firstName = trim($_POST['firstName']);
		$lastName = trim($_POST['lastName']);
		// access logic - looks in the array is the user exists
		$hasAccess = false;
		$fullName = trim($firstName . ' ' . $lastName);
		foreach ($users as $user) {
			if ($user === $fullName) $hasAccess = true;
		}
		// show welcome message or not authorized
		if ($hasAccess) echo '<h1>Welcome ' . $firstName . ' ' . $lastName . '</h1>';
		else echo '<h1>Access not authorized</h1>';
	}
	?>

	<form action="" method="POST">
		<input type="text" name='firstName' placeholder="Your First Name" value="<?php echo $firstName; ?>">
		<input type="text" name='lastName' placeholder="Your Last Name" value="<?php echo $lastName; ?>">
		<input type="submit" value="Send">
	</form>
</body>

</html>