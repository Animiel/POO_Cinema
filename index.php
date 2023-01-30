<?php

spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
    });

$real1 = new Realisateur("Snyder", "Zack", "Homme", "1984-05-12");
$real2 = new Realisateur("Cameron", "James", "homme", "1969-09-09");
$genre1 = new Genre("Action");
$genre2 = new Genre("SF");
$film1 = new Film("Gladiator", "2000-02-23", 120, $real1, $genre1);
$film2 = new Film("Exemple", "2000-02-23", 120, $real1, $genre2);
$film3 = new Film("Avatar", "2005-02-01", 139, $real2, $genre2);
$acteur1 = new Acteur("JEAN", "Pierre", "homme", "2000-12-01", $film2, "Principal");
$acteur2 = new Acteur("DUMONT", "Marie", "femme", "1973-04-23", $film2, "Secondaire");

echo $film2->afficherActeurs()."<br>";
?>