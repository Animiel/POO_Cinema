<?php
class Acteur extends Personne {


    public function __construct() {
        parent::__construct($nom, $prenom, $sexe, $naissance);
    }
}
?>