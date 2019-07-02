<?php
var_dump($_COOKIE);

// start the session before anything else if you wanto to use this
session_start();
//create of update a session value
$_SESSION['page_view'] = 1;
$_SESSION['LAST_ACTIVITY'] = time();
var_dump($_SESSION);

// condition...
if (
    isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 120)
) {
    // delete the session from the script
    session_unset();
    // delete the session from the file system (server)
    session_destroy();
}

// reginerate the session id (security matters)
session_regenerate_id();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session</title>
</head>

<body>

</body>

</html>