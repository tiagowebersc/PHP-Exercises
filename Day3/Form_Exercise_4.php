<!--
 -- Exercise 2 : 
	2.1 :
	Write a PHP script that gives the multiplication table of 2
	Multiplication table from 1 to 10 (Already done in previous exercise)

	2.2 :
	Modify this script to give the multiplication table of any number ($x for example) in a table

	2.3 :
	Create a form with one input.
	When you validate this form, it should display the multiplication table of the number you entered.
	You have to check if the value is correct (no float and no string, ONLY integer).

	2.4 :
	Display the multiplication table in a nice HTML format table style.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise Form 4</title>
</head>

<body>
    <?php
    $number = '';
    if (empty($_POST)) {
        ?>
        <form action="" method="post">
            <label for="number">Multiplication table of :</label>
            <input type="text" name="number" id="number">
            <input type="submit" value="Show">
        </form>
    <?php
} else {
    $number = (int)$_POST['number'];

    if (!is_int($number) || $number == 0) {
        echo '<span>Invalid number!!</span>';
    } else {
        ?>
            <table>
                <tbody>
                    <?php
                    for ($i = 1; $i <= 10; $i++) {
                        $value = $number * $i;
                        echo '<tr>
                    <td>' . $number . 'x' . $i . '=</td>
                    <td>' . $value . '</td>
                </tr>';
                    }
                    ?>

                </tbody>
            </table>
        <?php
    }
}
?>
</body>

</html>