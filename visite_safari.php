<?php

require_once "Pokemon.php";
require_once "Eau.php";
require_once "Plante.php";
require_once "Poison.php";
require_once "Safari.php";

$safari = new Safari();

$safari->introduire(new Eau ("Maraistre"));
$safari->introduire(new Plante ("Tropius"));
$safari->introduire(new Poison ("Arbok"));

$safari->nourrir();



