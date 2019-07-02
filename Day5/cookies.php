<?php
//Create a cookie
setcookie("username", "simon", time() + 120); // expire in 2 min
setcookie("date", "2019-07-02", time() + 120);

echo ($_COOKIE['username']);

var_dump($_COOKIE);
