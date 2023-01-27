<?php
class Realisateur extends Personne {
    private array $listeFilms;

    public function __construct(string $nom, string $prenom, string $sexe, DateTime $naissance) {
        parent::__construct($nom, $prenom, $sexe, $naissance);
        $this->listeFilms = [];
    }

    public function ajouterFilm(Film $film) {
        $this->listeFilms[] = $film;
    }

    public function afficherFilms() {
        foreach ($this->listeFilms as $film) {
            echo $film."<br>";
        }
    }
}
?>