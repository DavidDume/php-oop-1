<?php 

    class Movie {
        public $title;
        public $genre;

        public function __construct($title, $genre) {
            $this->title = $title;
            $this->genre = $genre;
        }

        public function getMovieDetails() {
            return $this->title . ' ' . $this->genre;
        }
    }

    $potter = new Movie('harry potter', 'fantasy');
    var_dump($potter);
    echo '<br>';
    $bourne = new Movie('jason bourn', 'action');
    var_dump($potter);
    echo '<br>';
    echo $potter->getMovieDetails();
    echo '<br>';
    echo $bourne->getMovieDetails();
?>