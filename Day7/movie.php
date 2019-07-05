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
            height: 25rem;
        }
    </style>
</head>

<body>
    <header>
        <h1>Movie detail:</h1>
    </header>
    <main>
        <section>
            <?php
            require_once 'database.php';
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
                $dbFound = mysqli_select_db($conn, DB_NAME);
                if (!$dbFound) {
                    echo '<span style=\'color:red\'>Problem to connect to the database!!</span>';
                    die();
                }
                $query = "select m.title, m.releaseYear, views, concat(d.first_name,' ',d.last_name) as 'director', d.director_id, d.country, m.poster from movies m inner join directors d on m.directorID = d.director_id where m.movie_id = '" . $id . "';";
                $results = mysqli_query($conn, $query);
                while ($tableRow = mysqli_fetch_assoc($results)) {
                    echo '<img src="' . $tableRow['poster'] . '" alt="">';
                    echo '<ul>';
                    echo '<li><strong>Title: </strong>' . $tableRow['title'] . '</li>';
                    echo '<li><strong>Release year: </strong>' . $tableRow['releaseYear'] . '</li>';
                    echo '<li><strong>Views: </strong>' . $tableRow['views'] . '</li>';
                    echo '<li><strong>Director: </strong><a href="director.php?id=' . $tableRow['director_id'] . '">' . $tableRow['director'] . '</a></li>';
                    echo '<li><strong>Director\'s country: </strong>' . $tableRow['country'] . '</li>';
                    echo '</ul>';
                }
                mysqli_close($conn);
            }
            ?>


        </section>
        <hr>
        <a href="movies.php">List of movies</a><br>
        <a href="directors.php">List of directors</a>

    </main>

</body>

</html>