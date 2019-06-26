<?php
/* MKTime take as arguments:
-Hour
-Minute
-Seconds
-Month
-Day
-Year
*/

// Return the timestamp for this date: 2019/04/22 19h00m30s
$timeStamp = mktime(19, 00, 30, 04, 22, 2019);
echo $timeStamp . '<br>';

// Display a format date for a specific timestamp
echo date('Y-m-d H:i:s', $timeStamp);
