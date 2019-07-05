<?php
// It can be dangerous not to project the data the users entered throught a form
if (isset($_GET['mySubmit'])) {
    echo $_GET['myInput'] . '<br>';
    // Make sure it is a number I get
    $number = (int) $_GET['myInput'];

    if ($number > 0) {
        echo $number;
    }
}

?>
<form action="">
    <input type="number" name='myInput'>
    <input type="submit" value="Send" name='mySubmit'>
</form>