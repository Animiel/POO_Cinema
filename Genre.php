<?php
class Genre {
    private string $genre;
    private array $listeGenreFilms;

    public function __construct(string $genre) {
        $this->genre = $genre;
        $this->listeGenreFilms = [];
    }

    public function getGenre() {
        return $this->genre;
    }

    public function setGenre(string $genre) {
        $this->genre = $genre;
    }

    public function ajouterFilm(Film $film) {
        $this->listeGenreFilms[] = $film;
    }

    public function afficherFilms() {
        foreach ($this->listeGenreFilms as $film) {
            echo $film."<br>";
        }
    }

    public function __toString() {
        return $this->genre;
    }
}
?>