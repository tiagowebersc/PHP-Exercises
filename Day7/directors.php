<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
    <style>
        section {
            display: flex;
        }

        img {
            height: 15rem;
        }
    </style>
</head>

<body>
    <header>
        <h1>List of directors:</h1>
    </header>
    <main>

        <?php
        require_once 'database.php';
        $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
        $dbFound = mysqli_select_db($conn, 'moviedb');
        if (!$dbFound) {
            echo '<span style=\'color:red\'>Problem to connect to the database!!</span>';
            die();
        }
        $query = "select director_id, first_name, last_name, picture from directors;";
        $results = mysqli_query($conn, $query);
        while ($tableRow = mysqli_fetch_assoc($results)) {
            echo '<section>';
            echo '<img src="' . $tableRow['picture'] . '" alt="movie">';
            echo '<ul>';
            echo '<li><strong>First name: </strong><a href="director.php?id=' . $tableRow['director_id'] . '">' . $tableRow['first_name'] . '</a></li>';
            echo '<li><strong>Last name: </strong><a href="director.php?id=' . $tableRow['director_id'] . '">' . $tableRow['last_name'] . '</a></li>';
            echo '</ul>';
            echo '</section><hr>';
        }
        mysqli_close($conn);
        ?>
        <a href="movies.php">List of movies</a><br>
        <a href="directors.php">List of directors</a>


    </main>






</body>

</html>