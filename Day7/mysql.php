<?php
// To work with database, we'll use a function call: mysqli
require_once 'database.php';

$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
echo 'Connection successfull<br>';
//var_dump($conn);
// Choose wich database I want to work with
$db_name = 'moviedb';
$db_found = mysqli_select_db($conn, $db_name);

if ($db_found) {
    echo "$db_name found!<br>";

    // DML command (Data manipulation language)
    $query = 'INSERT INTO movies(title, releaseYear, views, directorID) VALUES ("Jurassic Park", 2018, 285, 2)';
    $result = mysqli_query($conn, $query);
    if ($result)
        echo "Insert successfully!";
    else
        echo "Insert went wrong!";


    // DQL command (Data query language)
    // Prepare my query
    $query = 'SELECT * FROM movies';
    // Send the query to the DB
    $results = mysqli_query($conn, $query);
    /*    var_dump($results);
     I retrieve the results as an array
     and display this array (using a loop)
     */
    while ($db_record = mysqli_fetch_assoc($results)) {
        //var_dump($db_record);
        echo '<hr>';
        echo $db_record['title'] . '<br>';
        echo $db_record['releaseYear'] . '<br>';
        echo $db_record['views'] . '<br>';
    }
} else
    echo "$db_name not found!<br>";




// Close the connection to the database
mysqli_close($conn);
