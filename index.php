<h1>Exercice POO Football</h1>

<p>Soit une application qui gère des équipes de football
Une équipe possède un nom (Paris Saint-Germain, Bayern Munich, Real Madrid, ...) et un ensemble de joueurs identifié par un prénom, un nom et une date de naissance
Chaque équipe appartient à un pays (France, Espagne, Allemagne, ...) et chaque joueur a une nationalité (France, Espagne, Allemagne, ...)
Un joueur peut jouer dans une ou plusieurs équipes dans sa carrière (avec une année de début de saison) Concevez le projet en POO de façon à :
- lister toutes les équipes d'un pays (Ex : France --> PSG, OM, OL, RCSA, ...)
- lister tous les joueur s d'une équipe (avec nom, prénom, âge et pays d'origine) Ex : PSG --> Neymar JR
(30 ans), Lionel Messi (35 ans), Kylian Mbappé (23 ans)
- lister toutes les équipes d'un joueur (Ex : Lionel Messi (FC Barcelone 2004, PSG 2021))</p>

<h2>Résultat</h2>

<?php

spl_autoload_register(function ($class_name) {

require_once $class_name . '.php';

});

$france = new Country("France");
$angleterre = new Country("Angleterre");
$portugal = new Country ("Portugal");
$espagne = new Country("Espagne");
$argentine = new Country("Argentine");
$italie = new Country("Italie");

$psg = new Equipe("PSG", $france);
$monaco = new Equipe("Monaco", $france);
$manu = new Equipe("Manchester United", $angleterre);
$juve = new Equipe("Juventus", $italie);
$real_m= new Equipe("Real Madrid", $espagne);
$barca = new Equipe("Barcelona", $espagne);
$lyon = new Equipe("Olympique Lyonais", $france);

$cr7 = new Joueur("Ronaldo", "Cristiano", "1985-02-05", $portugal);

$c1_cr7 = new Carriere($cr7, $manu, 2003, "");
$c2_cr7 = new Carriere($cr7, $real_m, 2009, "");
$c3_cr7 = new Carriere($cr7, $juve, 2018, "");
$c4_cr7 = new Carriere($cr7, $manu, 2021, "");

$messi = new Joueur("Messi", "Lionel", "1987-06-24", $argentine);

$c1_messi = new Carriere($messi, $barca, 2004, "");
$c2_messi = new Carriere($messi, $psg, 2021, "oui");

$mbappe = new Joueur("Mbappé", "Kylian", "1998-12-20", $france);

$c1_mbappe = new Carriere($mbappe, $monaco, 2015, "");
$c2_mbappe = new Carriere ($mbappe, $psg, 2017, "oui");

$benzema = new Joueur("Benzema", "Karim", "1987-12-19", $france);

$c1_benzema = new Carriere($benzema, $lyon, 2005, "");
$c2_benzema = new Carriere($benzema, $real_m, 2009, "oui");

$france->afficherEquipes();

echo "<br>";

$france->afficherJoueurs();

echo "<br>";

$psg->afficherJoueurs();

echo "<br>";

$real_m->afficherJoueurs();

echo "<br>";

$real_m->afficherAnciensJoueurs();

echo "<br>";

$cr7->afficherCarriere();





