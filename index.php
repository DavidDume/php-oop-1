<?php   

    require __DIR__ . '/models/Genre.php';
    require __DIR__ . '/models/Movie.php';


    $potterGenres = [
        new Genre('fantasy'),
        new Genre('action')
    ];

    $bourneGenres = [
        new Genre('thriller'),
        new Genre('action')
    ];

    $potter = new Movie('harry potter', $potterGenres);
    var_dump($potter);
    echo '<br>';
    $bourne = new Movie('jason bourn', $bourneGenres);
    var_dump($bourne);
    echo '<br>';
    echo $potter->getMovieTitle();
    echo '<br>';
    echo $potter->getMovieGenres();
    echo '<br>';
    echo $bourne->getMovieTitle();
    echo '<br>';
    echo $bourne->getMovieGenres();
    echo '<br>';
?>