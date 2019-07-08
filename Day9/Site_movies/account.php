<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
    <style>
        td,
        th {
            width: 10rem;
            text-align: left;
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <header>
        <?php require_once 'header.php'; ?>
        <h1>Account detail:</h1>
    </header>
    <main>
        <section>
            <?php
            require_once 'database.php';
            if (!isset($_SESSION['user'])) header("Location: signin.php");
            $id = $_SESSION['id'];
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
            $dbFound = mysqli_select_db($conn, DB_NAME);
            if (!$dbFound) {
                echo '<span style=\'color:red\'>Problem to connect to the database!!</span>';
                die();
            }
            $query = "select firstName, lastName, email from users where userId = '" . $id . "';";
            $results = mysqli_query($conn, $query);
            while ($tableRow = mysqli_fetch_assoc($results)) {
                echo '<ul>';
                echo '<li><strong>First name: </strong>' . $tableRow['firstName'] . '</li>';
                echo '<li><strong>Last year: </strong>' . $tableRow['lastName'] . '</li>';
                echo '<li><strong>Email: </strong>' . $tableRow['email'] . '</li>';
                echo '</ul>';

                echo '<h2>Liked movies</h2>';
                echo '<table>
                    <tr>
                        <th>Movie</th>
                        <th>Release year</th>
                        <th>Director</th>
                    </tr>';
                $query = "select m.movie_id, m.title, m.releaseYear, concat(d.first_name,' ',d.last_name) as 'director' from likes l inner join movies m on l.movieId = m.movie_id inner join directors d on m.directorID = d.director_id where d.director_id = '" . $id . "'";
                $results = mysqli_query($conn, $query);
                while ($tableRow = mysqli_fetch_assoc($results)) {
                    echo '<tr>';
                    echo '<td><a href="movie.php?id=' . $tableRow['movie_id'] . '">' . $tableRow['title'] . '</a></td><td>' . $tableRow['releaseYear'] . '</td><td>' . $tableRow['director'] . '</td>';
                    echo '</tr>';
                }
            }
            echo '</table>';
            mysqli_close($conn);
            ?>


        </section>
        <hr>
        <a href="movies.php">List of movies</a><br>
        <a href="directors.php">List of directors</a>

    </main>

</body>

</html>