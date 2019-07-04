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
            margin: 1rem;
        }

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
        <h1>Director detail:</h1>
    </header>
    <main>
        <section>
            <?php
            require_once 'database.php';
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
                $dbFound = mysqli_select_db($conn, 'moviedb');
                if (!$dbFound) {
                    echo '<span style=\'color:red\'>Problem to connect to the database!!</span>';
                    die();
                }
                $query = "select first_name, last_name, picture, date_of_birth, country from directors where director_id = '" . $id . "';";
                $results = mysqli_query($conn, $query);
                while ($tableRow = mysqli_fetch_assoc($results)) {
                    echo '<img src="' . $tableRow['picture'] . '" alt="">';

                    echo '<div><ul>';
                    echo '<li><strong>First name: </strong>' . $tableRow['first_name'] . '</li>';
                    echo '<li><strong>Last year: </strong>' . $tableRow['last_name'] . '</li>';
                    echo '<li><strong>Birthdate: </strong>' . $tableRow['date_of_birth'] . '</li>';
                    echo '<li><strong>Country: </strong>' . $tableRow['country'] . '</li>';
                    echo '</ul>';
                }

                echo '<table>
                        <tr>
                            <th>Movie</th>
                            <th>Release year</th>
                            <th>Director</th>
                        </tr>';
                require_once 'database.php';
                $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
                $dbFound = mysqli_select_db($conn, 'moviedb');
                if (!$dbFound) {
                    echo '<span style=\'color:red\'>Problem to connect to the database!!</span>';
                    die();
                }
                $query = "select m.movie_id, m.title, m.releaseYear, concat(d.first_name,' ',d.last_name) as 'director' from movies m inner join directors d on m.directorID = d.director_id  where d.director_id = '" . $id . "';";
                $results = mysqli_query($conn, $query);
                while ($tableRow = mysqli_fetch_assoc($results)) {
                    echo '<tr>';
                    echo '<td><a href="movie.php?id=' . $tableRow['movie_id'] . '">' . $tableRow['title'] . '</a></td><td>' . $tableRow['releaseYear'] . '</td><td>' . $tableRow['director'] . '</td>';
                    echo '</tr>';
                }

                echo '</table>
                
                </div>';
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