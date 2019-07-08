<?php
session_start();
if (isset($_POST['submitSignIn'])) header("Location: signin.php");
if (isset($_POST['submitLogIn'])) header("Location: login.php");
if (isset($_POST['submitAccount'])) header("Location: account.php");
if (isset($_POST['submitLogout'])) {
    session_unset();
    session_destroy();
}
?>
<form action="" method="post">
    <?php
    if (isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
        ?>
        <label>Welcome: <?php echo $user ?></label>
        <input type="submit" value="Account" name="submitAccount">
        <input type="submit" value="Log-out" name="submitLogout">
    <?php
    } else {
        ?>
        <input type="submit" value="Sign-in" name="submitSignIn">
        <input type="submit" value="Log-in" name="submitLogIn">
    <?php
    }
    ?>
</form>