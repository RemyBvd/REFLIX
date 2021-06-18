<?php

$utils = include 'utils.php';
$page = 1;
$POPULAR_MOVIES_URL = "https://api.themoviedb.org/3/movie/popular?api_key={$API_KEY}&language=en-US&page={$page}";

function display_list_movie($movie) {
    $details = <<< "EOT"
    <div class="movie_card">
        <a href="movie.php?id=$movie->id">
            <img src="https://image.tmdb.org/t/p/w300/$movie->poster_path" />
        </a>
    </div>
    EOT;
    return $details;
}

?>

<!DOCTYPE html>
    <html lang="en">
    <link rel="stylesheet" href="style.css">
    <head>
        <title>Test PHP</title>
    </head>
    <body style="margin: 0px;  background-color: #19535f;">
        <div class="movies_list">
            <?php
                $response = json_decode(request($POPULAR_MOVIES_URL));
                foreach ($response->results as &$movie) {
                    echo display_list_movie($movie);
                }
            ?>
        </div>
    </body>

</html>