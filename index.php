<?php

spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
    });

$real1 = new Realisateur("Snyder", "Zack", "Homme", $date = new DateTime("1984-05-12"));
$real2 = new Realisateur("Cameron", "James", "homme", $date = new DateTime("1969-09-09"));
$genre1 = new Genre("Action");
$genre2 = new Genre("SF");
$film1 = new Film("Gladiator", $date = new DateTime("2000-02-23"), 120, $real1, $genre1);
$film2 = new Film("Exemple", $date = new DateTime("2000-02-23"), 120, $real1, $genre2);
$film3 = new Film("Avatar", $date = new DateTime("2005-02-01"), 139, $real2, $genre1);

echo $real1->afficherFilms();
echo $genre1->afficherFilms();
?>