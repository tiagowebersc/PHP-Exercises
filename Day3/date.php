<?php
date_default_timezone_set('Europe/Luxembourg');
// Most known formats are: Y m d H i s

// Return the day's number
echo date('d') . '<br>';
// Return the day's number (without 0 in front)
echo date('j') . '<br>';
// Return the month's number
echo date('m') . '<br>';
// Return the month's number (without 0 in front)
echo date('n') . '<br>';
// Return the short name of the month
echo date('M') . '<br>';
// Return the year
echo date('Y') . '<br>';
// Return the short representation of the year
echo date('y') . '<br>';
// Return the hour (wamp server)
echo date('H') . '<br>';
// Return timestamp
echo date('U') . '<br>';
//https://www.php.net/manual/en/function.date.php

echo date('Y-m-d H:i:s') . '<br>';
