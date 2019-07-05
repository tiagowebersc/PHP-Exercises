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
        <h1>List of movies:</h1>
    </header>
    <main>

        <?php
        require_once 'database.php';
        $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
        $dbFound = mysqli_select_db($conn, DB_NAME);
        if (!$dbFound) {
            echo '<span style=\'color:red\'>Problem to connect to the database!!</span>';
            die();
        }
        $query = "select movie_id, title, releaseYear, poster from movies;";
        $results = mysqli_query($conn, $query);
        while ($tableRow = mysqli_fetch_assoc($results)) {
            echo '<section>';
            echo '<img src="' . $tableRow['poster'] . '" alt="' . $tableRow['title'] . '">';
            echo '<ul>';
            echo '<li><strong>Title: </strong><a href="movie.php?id=' . $tableRow['movie_id'] . '">' . $tableRow['title'] . '</a></li>';
            echo '<li><strong>Release year: </strong>' . $tableRow['releaseYear'] . '</li>';
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