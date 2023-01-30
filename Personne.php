<?php
class Personne {
    protected string $nom;
    protected string $prenom;
    protected string $sexe;
    protected DateTime $naissance;

    public function __construct(string $nom, string $prenom, string $sexe, string $naissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->naissance = new DateTime($naissance);
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom(string $nom) {
        $this->nom = $nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setPrenom(string $prenom) {
        $this->prenom = $prenom;
    }

    public function getSexe() {
        return $this->sexe;
    }

    public function setSexe(string $sexe) {
        $this->sexe = $sexe;
    }

    public function getNaissance() {
        return $this->naissance->format("d/m/Y");
    }

    public function setNaissance(DateTime $naissance) {
        $this->naissance = $naissance;
    }

    public function __toString() {
        return "$this->nom $this->prenom est un(e) $this->sexe né(e) le ".$this->getNaissance();
    }
}
?>