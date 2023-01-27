<?php
class Realisateur extends Personne {
    private array $listeFilms;

    public function __construct() {
        parent::__construct($nom, $prenom, $sexe, $naissance);
        $this->listeFilms = [];
    }
}
?>