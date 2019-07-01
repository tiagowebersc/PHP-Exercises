<!--
    - Exercise : 
	
		-- Part 1 :
	   		Create two pages:
	        - signin.php: User registration page, with the following fields:
	            - Name
	            - First name
	            - E-mail
	            - Password
	            - Confirmation of password
	            - Checkbox "Subscribe to the newsletter"

	        - recap-signin.php: Page showing the summary of the information entered.

		-- Part 2 :
			1. Using the first part, merge both the signin.php and recap-signin.php files into one.
			If we arrive on the page without the form being submitted, we will post the form, otherwise we will display the summary.

			2. Add validators on the different fields of the form:
				- The name and the first name are mandatory.
				- The e-mail must be between 8 and 50 characters long and should contains @
				- The fields "Password" and "Confirmation" must be identical and have at least 8 characters

			3. Add a box "I accept the conditions of use of the product", which must be checked.

			Bonus: Make the form values ​​reappear with each submission, in case of error.
    */
-->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Exercise Form 2</title>
	<style>
		input,
		span {
			display: block;
		}

		.error {
			color: red;
		}
	</style>
</head>

<body>
	<?php
	$firstName = $lastName = $email = $password = $confirmationPassword = $newsletter = $conditions = "";
	$firstNameErr = $lastNameErr = $emailErr = $passwordErr = $confirmPasswordErr = $conditionErr = "";

	$error = false;
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		//var_dump($_POST);
		$firstName = trim($_POST['firstName']);
		$lastName = trim($_POST['lastName']);
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
		$confirmationPassword = trim($_POST['confirmationPassword']);
		$newsletter = 'No';
		$conditions = 'No';
		if (array_key_exists('newsletter', $_POST) && trim($_POST['newsletter']) == 'on') $newsletter = 'Yes';
		if (array_key_exists('conditions', $_POST) && trim($_POST['conditions']) == 'on') $conditions = 'Yes';

		if (empty($_POST["firstName"])) {
			$firstNameErr = "Missing";
			$error = true;
		}
		if (empty($_POST["lastName"])) {
			$lastNameErr = "Missing";
			$error = true;
		}
		if (empty($_POST["email"]) || strlen($_POST["email"]) < 8 || strlen($_POST["email"]) > 50 || strpos($_POST["email"], '@') == false) {
			$emailErr = "format invalid";
			$error = true;
		}
		if (empty($_POST["password"]) || strlen($_POST["password"]) < 8) {
			$passwordErr = "format invalid";
			$error = true;
		} else {
			if (empty($_POST["confirmationPassword"]) || $_POST["password"] !== $_POST["confirmationPassword"]) {
				$confirmPasswordErr = "incorrect password";
				$error = true;
			}
		}
		if ($conditions == 'No') {
			$conditionErr = "You must accept the conditions";
			$error = true;
		}
	}

	if (empty($_POST) || $error) {
		?>
		<form action="" method="post">
			<label for="firstName">First name:</label>
			<input type="text" name="firstName" id="firstName" placeholder="Your first name" value="<?php echo htmlspecialchars($firstName); ?>">
			<span class="error"><?php echo $firstNameErr; ?></span>
			<label for="lastName">Last name:</label>
			<input type="text" name="lastName" id="lastName" placeholder="Your last name" value="<?php echo htmlspecialchars($lastName); ?>">
			<span class="error"><?php echo $lastNameErr; ?></span>
			<label for="email">Email:</label>
			<input type="email" name="email" id="email" placeholder="Your email" value="<?php echo htmlspecialchars($email); ?>">
			<span class="error"><?php echo $emailErr; ?></span>
			<label for="password">Password:</label>
			<input type="password" name="password" id="password" placeholder="Your password" value="<?php echo htmlspecialchars($password); ?>">
			<span class="error"><?php echo $passwordErr; ?></span>
			<label for="confirmationPassword">Confirm your password:</label>
			<input type="password" name="confirmationPassword" id="confirmationPassword" placeholder="Confirm your password" value="<?php echo htmlspecialchars($confirmationPassword); ?>">
			<span class="error"><?php echo $confirmPasswordErr; ?></span>
			<label for="newsletter">Subscribe for the newsletter:</label>
			<input type="checkbox" name="newsletter" <?php if ($newsletter == 'Yes') echo "checked" ?>>
			<label for="newsletter">I accept the conditions of use of the product:</label>
			<input type="checkbox" name="conditions" <?php if ($conditions == 'Yes') echo "checked" ?>>
			<span class="error"><?php echo $conditionErr; ?></span>
			<input type="Submit" value="Sign in">
		</form>
	<?php
} else {
	?>
		<span>First name: <strong><?php echo $firstName ?></strong></span>
		<span>Last name: <strong><?php echo $lastName ?></strong></span>
		<span>Email: <strong><?php echo $email ?></strong></span>
		<span>Password: <strong><?php echo $password ?></strong></span>
		<span>Confirmed password: <strong><?php echo $confirmationPassword ?></strong></span>
		<span>Subscribed for the newsletter: <strong><?php echo $newsletter ?></strong></span>
	<?php
}
?>
</body>

</html>