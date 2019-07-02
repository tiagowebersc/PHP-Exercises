<?php
// read a file (but not nice format style)
/*
$fileContent = readfile("files/movies.txt");
echo $fileContent;
$fileContent = file_get_contents("files/movies.txt");
echo $fileContent;
*/

// check if a file exists
if (file_exists("files/movies.txt")) {
    //Fopen - Open a file
    $fileHandle = fopen("files/movies.txt", "r");
    echo $fileHandle . '<br><br>';

    // loop until you reach the end of file (eof)
    while (!feof($fileHandle)) {
        // retrieve the current line and move on to the next
        $lineOfText = fgets($fileHandle);
        echo $lineOfText . '<br>';
    }

    // close the open file
    fclose($fileHandle);
} else {
    echo "file doesn\'t exist";
}
