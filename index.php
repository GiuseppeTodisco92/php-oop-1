<?php
    require_once __DIR__ . '/classes/movie.php';

    $movies = [
        new Movie('Jhon Wick', 'Chad Stahelski', 'Action', 2014),
        new Movie('Avengers', 'Joss Whedon', 'Action/Fantasy', 2012),
        new Movie('Candyman', 'Nia DaCosta', 'horror', 2021)
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Movies</h1>
    <ul>
        <?php foreach($movies as $movie) { ?>
        <li>
            <h3><?php echo $movie->title; ?></h3>
            <h4><?php echo $movie->moviedirector; ?></h4>
            <p>genere : <?php echo $movie->genre; ?> </p>
            <?php if($movie->genre === 'horror'){  ?>
                <p><strong>Visione consigliata con un pubblico adulto</strong></p>
            <?php } ?>

        </li>
        <?php } ?>
    </ul>
</body>
</html>