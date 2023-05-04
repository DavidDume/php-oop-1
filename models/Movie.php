<?php

class Movie {
    public $title;
    public $genres;

    public function __construct($title, array $genres) {
        $this->title = $title;
        $this->genres = $genres;
        
        foreach($genres as $genre) {
            if(!$genre instanceof $genre) {
                echo 'genre non valido';
                die();
            }
        }
    }

    public function getMovieTitle() {
        return $this->title;
    }

    public function getMovieGenres() {
        $generi = '';
        foreach($this->genres as $genre) {
            $generi .= $genre->type . '<br>';
        }
        return $generi;
    }
}