<?php
// Copy a file
$file = "files/movies.txt";
$copiedFile = "files/copy.txt";
copy($file, $copiedFile);

// Delete a file
unlink($file);
