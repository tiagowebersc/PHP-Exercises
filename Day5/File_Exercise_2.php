<?php

/*
		Create a script that saves in the last_access.log file the timestamp of this time (now).

		We will replace the old timestamp.

		Choose the right setting to open the file
	 */

$fileHandle = fopen('files/last_access.log', 'w');
fwrite($fileHandle, time());
fclose($fileHandle);
