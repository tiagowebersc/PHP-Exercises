<?php
// It can be dangerous not to project the data the users entered throught a form
if (isset($_GET['mySubmit'])) {
    echo $_GET['myInput'] . '<br>';
    // remove the special HTML chars
    // "&" convert to "&amp;"
    // "<" convert to "&lt;"
    // . . .
    $str = htmlspecialchars($_GET['myInput']);
    echo $str . '<br>';
    $str = strip_tags($_GET['myInput']);
    echo $str . '<br>';
}

?>
<form action="">
    <input type="text" name='myInput'>
    <input type="submit" value="Send" name='mySubmit'>
</form>