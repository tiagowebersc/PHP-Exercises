<?php

// Open the file in writing mode
// If it doesn't exists, it'll create one
$fileHandle = fopen("files/test_file.txt", "w");
$fileContent = "Hellooooo, how are you?";

// write inside the file
fwrite($fileHandle, $fileContent);
// close the file
fclose($fileHandle);

echo "File created!";
