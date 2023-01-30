<?php

class Casting {
    private Film $film;
    private Acteur $acteur;
    private Role $role;

    public function __construct(Film $film, Acteur $acteur, Role $role) {
        $this->film = $film;
        $this->acteur = $acteur;
        $this->role = $role;
        $this->film->addCasting($this);
        $this->acteur->addCasting($this);
        $this->role->addCasting($this);
    }

    public function getFilm() {
        return $this->film;
    }

    public function getActeur() {
        return $this->acteur;
    }

    public function getRole() {
        return $this->role;
    }
}