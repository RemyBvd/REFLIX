<?php

    $utils = include 'utils.php';
    $MOVIE_ID = $_GET['id'];
    $MOVIE_URL = "https://api.themoviedb.org/3/movie/{$MOVIE_ID}?api_key={$API_KEY}&language=en-US";

    function display_film($movie) {
        $details = <<< "EOT"
        <div class="movie">
            <img src="https://image.tmdb.org/t/p/w300/$movie->poster_path" />
            <div class="movie_details">
                <h2>$movie->original_title</h2>
                <p>$movie->overview</p>
            </div>
        </div>
        EOT;
        return $details;
    }

?>

<!DOCTYPE html>
    <html lang="en">
    <link rel="stylesheet" href="movieStyle.css">
    <head>
        <title>Test PHP</title>
    </head>

    <body style="margin: 0px;  background-color: #19535f;">
        <div style="height: 100vh; display: flex; align-items: center;">
            <?php
                $response = json_decode(request($MOVIE_URL));
                echo display_film($response);
            ?>
        </div>
    </body>
</html>