<?php
class Film {
    private string $titre;
    private DateTime $dateSortieFr;
    private int $duree;
    private Realisateur $real;
    private Genre $genre;
    private string $synopsis;
    private array $listeCastings;

    public function __construct(string $titre, string $dateSortieFr, int $duree, Realisateur $real, Genre $genre, string $synopsis = "") {
        $this->titre = $titre;
        $this->dateSortieFr = new DateTime($dateSortieFr);
        $this->duree = $duree;
        $this->real = $real;
        $this->real->ajouterFilm($this);
        $this->genre = $genre;
        $this->genre->ajouterFilm($this);
        $this->synopsis = $synopsis;
        $this->listeCastings = [];
    }

    public function getTitre() {
        return $this->titre;
    }

    public function setTitre(string $titre) {
        $this->titre = $titre;
    }

    public function getDateSortieFr() {
        return $this->dateSortieFr;
    }

    public function setDateSortieFr(DateTime $date) {
        $this->dateSortieFr = $date;
    }

    public function getDuree() {
        return $this->duree;
    }

    public function setDuree(int $duree) {
        $this->duree = $duree;
    }

    public function getReal() {
        return $this->real;
    }

    public function setReal(Realisateur $real) {
        $this->real = $real;
    }

    public function getGenre() {
        return $this->genre;
    }

    public function setGenre(Genre $genre) {
        $this->genre = $genre;
    }

    public function getSynopsis() {
        return $this->synopsis;
    }

    public function setSynopsis(string $synopsis) {
        $this->synopsis = $synopsis;
    }

    public function afficherInfosFilm() {
        return $this->titre." est un film de ".$this->getGenre()." réalisé par ".$this->real->getPrenom()." ".$this->real->getNom()." et diffusé en salle en ".$this->dateSortieFr->format('Y').". Sa durée est de ".$this->duree." minutes.";
    }

    public function addCasting(Casting $casting) {
        $this->listeCastings[] = $casting;                  //on stock l'objet en entier, la manipulation de ses propriétés se fait dans l'affichage
    }
    
    public function afficherCasting() {
        $result = "Les acteurs du film \"$this->titre\" sont :<br>";
        foreach($this->listeCastings as $casting) {
            $result .= $casting->getActeur()." joue le rôle de ".$casting->getRole()."<br>";
        }
        return $result;
    }

    public function __toString() {
        return $this->titre;
    }
}
?>