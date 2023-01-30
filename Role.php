<?php
class Role {
    private string $role;
    private array $listeCastings;

    public function __construct(string $role) {
        $this->role = $role;
        $this->listeCastings = [];
    }

    public function getRole() {
        return $this->role;
    }

    public function setRole($role) {
        $this->role = $role;
    }

    public function getListeCasting() {
        return $this->listeCastings;
    }

    public function addCasting(Casting $casting) {
        $this->listeCastings[] = $casting;
    }

    public function afficherCasting() {
        $result = "Le rôle de $this a été interprété par :<br>";
        foreach($this->listeCastings as $casting) {
            $result .= $casting->getActeur()." dans ".$casting->getFilm()."<br>";
        }
        return $result;
    }

    public function __toString() {
        return "$this->role";
    }
}
?>