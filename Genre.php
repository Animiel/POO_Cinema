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
        echo "Voici les films de la catégorie $this :<br><br>";
        foreach ($this->listeGenreFilms as $film) {
            echo $film."<br>";
        }
        return "<br>";
    }

    public function __toString() {
        return $this->genre;
    }
}
?>