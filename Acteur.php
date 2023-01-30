<?php
class Acteur extends Personne {
    private Film $film;
    private Role $role;
    private array $listeFilms;
    private array $listeRoles;

    public function __construct(string $nom, string $prenom, string $sexe, string $naissance, Film $film, string $role) {
        parent::__construct($nom, $prenom, $sexe, $naissance);
        $this->film = $film;
        $this->film->ajouterActeur($this);
        $this->role = new Role($role);
        $this->role->ajouterActeur($this);
        $this->listeFilms = [];
        $this->listeRoles = [];
    }

    public function getFilm() {
        return $this->film;
    }

    public function setFilm(Film $film) {
        $this->film = $film;
    }

    public function getRole() {
        return $this->role;
    }

    public function setRole(Role $role) {
        $this->role = $role;
    }
}
?>