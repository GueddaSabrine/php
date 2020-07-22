<?php
require_once "./abstract/Pokemon.php";
require_once "./abstract/Terrestre.php";
require_once "./abstract/Marin.php";
require_once "./concret/Casanier.php";
require_once "./concret/Croisiere.php";
require_once "./concret/Mer.php";
require_once "./concret/Sportif.php";

$Casanier = new Casanier("Salameche","12");
echo Casanier::PATTES."<br>";
echo $Casanier->__toString();

$Sportif = new Sportif("Pikachu","18");
echo Sportif::PATTES."<br>";
echo $Sportif->__toString();

$Mer = new Mer("Rondoudou","45");
echo Mer::NAGEOIRE."<br>";
echo $Mer->__toString();

$Croisiere = new Croisiere("Bulbizarre","15");
echo Croisiere::NAGEOIRE."<br>";
echo $Croisiere->__toString();

?>