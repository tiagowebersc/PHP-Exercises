<?php

/*
		1. Create a PHP script that will display the contents of a message.txt file, located in the same folder as this script.

		2. View the contents of the transform_to_table.txt file in an HTML table.
	*/

if (file_exists('message.txt')) {
	$fileHandle = fopen('message.txt', 'r');
	while (!feof($fileHandle)) {
		echo fgets($fileHandle) . '<br>';
	}
	fclose($fileHandle);
}

if (file_exists('transform_to_table.txt')) {
	echo '<table><tr><th>Action</th><th>Date</th></tr>';
	$fileHandle = fopen('transform_to_table.txt', 'r');
	while (!feof($fileHandle)) {
		$line = fgets($fileHandle);
		echo '<tr><td>' . '</td><td>' . '</td></tr>';
	}
	fclose($fileHandle);
	echo '</table>';
}
