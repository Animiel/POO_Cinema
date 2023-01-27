<?php

spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
    });

$real1 = new Realisateur("Snyder", "Zack", "Homme", $date = new DateTime("1984-05-12"));
$genre1 = new Genre("Action");
$film1 = new Film("Gladiator", $date = new DateTime("2000-02-23"), 120, $real1, $genre1);
$film2 = new Film("Exemple", $date = new DateTime("2000-02-23"), 120, $real1, $genre1);


?>