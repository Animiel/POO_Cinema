<?php
class Role {
    private string $role;
    private array $listeActeurs;

    public function __construct(string $role) {
        $this->role = $role;
        $this->listeActeurs = [];
    }

    public function getRole() {
        return $this->role;
    }

    public function setRole($role) {
        $this->role = $role;
    }

    public function getActeur() {
        return $this->acteur;
    }

    public function setActeur(Acteur $acteur) {
        $this->acteur = $acteur;
    }

    public function getListeActeurs() {
        return $this->listeActeurs;
    }

    public function ajouterActeur(Acteur $acteur) {
        $this->listeActeurs[] = $acteur;
    }

    public function afficherActeurs() {
        foreach ($this->listeActeurs as $acteur) {
            return $acteur;
        }
    }

    public function __toString() {
        return "$this->role";
    }
}
?>