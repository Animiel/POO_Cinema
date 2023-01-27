<?php
class Genre {
    private string $genre;
    private array $listeGenreFilms;

    public function __construct(string $genre) {
        $this->genre = $genre;
        $this->listeGenreFilms = [];
    }

    public function getGenre(string $genre) {
        return $this->genre;
    }

    public function setGenre(string $genre) {
        $this->genre = $genre;
    }
}
?>