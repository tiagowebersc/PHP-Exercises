<?php
// There is a global $_FILES array
if (isset($_POST['mySubmit'])) {
    var_dump($_FILES);
    if ($_FILES['myFile']['error'] != UPLOAD_ERR_OK) {
        echo "Some error during upload";
    } else {
        $destinationDir = './uploads/';
        // Check if it's an image
        $extensionArray = ['jpg' => 'image/jpeg', 'png' => 'image/png', 'gif' => 'image/gif'];
        // check if the extension match a value in the array
        $extFile = array_search($_FILES['myFile']['type'], $extensionArray);
        if ($extFile) {
            // hash the file name
            $shaFile = sha1_file($_FILES['myFile']['tmp_name']);
            echo 'Hash name: ' . $shaFile;
            $fileNumbers = 0;
            // to be sure that is a available name to save inside the server
            do {
                $fileName = $shaFile . $fileNumbers . '.' . $extFile;
                $fullPath = $destinationDir . $fileName;
                var_dump($fullPath);
                $fileNumbers++;
            } while (file_exists($fullPath));


            //$fullPath = $destinationDir . $_FILES['myFile']['name'];
            echo $_FILES['myFile']['tmp_name'];
            echo $fullPath;
            $moved = move_uploaded_file($_FILES['myFile']['tmp_name'], $fullPath);
            if ($moved)
                echo 'File successfully saved!';
            else
                echo 'Error during saving';
        } else {
            echo 'File isn\'t a image';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Files</title>
</head>

<body>
    <form enctype="multipart/form-data" action="" method="post">
        <input type="hidden" name="MAX_FILE_SIZE" value="250000"> <!-- 250kb -->
        Select the file: <input type="file" name="myFile">
        <input type="submit" value="Send" name="mySubmit">
    </form>
</body>

</html>