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
            width: 15rem;
            text-align: left;
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <header>
        <h1>Welcome to the freakin movie website</h1>
    </header>
    <main>
        <h2>Last three releases!!!</h2>
        <table>
            <tr>
                <th>Movie</th>
                <th>Release year</th>
                <th>Director</th>
            </tr>
            <?php
            require_once 'database.php';
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
            $dbFound = mysqli_select_db($conn, DB_NAME);
            if (!$dbFound) {
                echo '<span style=\'color:red\'>Problem to connect to the database!!</span>';
                die();
            }
            $query = "select m.movie_id, m.title, m.releaseYear, concat(d.first_name,' ',d.last_name) as 'director' from movies m inner join directors d on m.directorID = d.director_id order by m.releaseYear desc limit 3;";
            $results = mysqli_query($conn, $query);
            while ($tableRow = mysqli_fetch_assoc($results)) {
                echo '<tr>';
                echo '<td><a href="movie.php?id=' . $tableRow['movie_id'] . '">' . $tableRow['title'] . '</a></td><td>' . $tableRow['releaseYear'] . '</td><td>' . $tableRow['director'] . '</td>';
                echo '</tr>';
            }
            mysqli_close($conn);

            ?>
        </table>
    </main>





</body>

</html>