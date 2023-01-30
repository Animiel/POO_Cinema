<?php
class Realisateur extends Personne {
    private array $listeFilms;

    public function __construct(string $nom, string $prenom, string $sexe, string $naissance) {
        parent::__construct($nom, $prenom, $sexe, $naissance);
        $this->listeFilms = [];
    }

    public function afficherInfos() {
        $result = $this->nom." ".$this->prenom." est un(e) ".$this->sexe." né(e) le ".$this->naissance->format('d/m/Y').".<br>";
        $result .= $this->afficherFilms();
        return $result;
    }

    public function ajouterFilm(Film $film) {
        $this->listeFilms[] = $film;
    }

    public function afficherFilms() {
        $result = "Voici la liste des films réalisés par $this->prenom $this->nom :<br><br><ul>";
        foreach ($this->listeFilms as $film) {
            $result .= "<li>".$film."</li><br>";
        }
        $result .= "</ul>";
        return $result."<br>";
    }
}
?>