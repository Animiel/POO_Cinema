<?php
class Acteur extends Personne {
    private array $listeCastings;

    public function __construct(string $nom, string $prenom, string $sexe, string $naissance) {
        parent::__construct($nom, $prenom, $sexe, $naissance);
    }

    public function addCasting(Casting $casting) {
        $this->listeCastings[] = $casting;
    }

    public function afficherCasting() {
        $result = "Les films dans lesquels $this a joué sont :<br>";
        foreach($this->listeCastings as $casting) {
            $result .= $casting->getFilm()." dans le rôle de ".$casting->getRole()."<br>";          //ATTENTION : $casting->film->getTitre() n'est pas autorisé puisque l'attribut 'film' est privé ==> utilisé l'objet entier et renvoyer le nécessaire dans __toString()
        }
        return $result;
    }

    public function __toString() {
        return $this->prenom." ".$this->nom;
    }
}
?>