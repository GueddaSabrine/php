<?php
require_once "./classes/Pokemon.php";
require_once "./classes/Terrestre.php";
require_once "./classes/Marin.php";
require_once "./concret/Casanier.php";
require_once "./concret/Croisiere.php";
require_once "./concret/Mer.php";
require_once "./concret/Sportif.php";

$Casanier = new Casanier("Salameche","12","2","0,65");
//echo Casanier::PATTES."<br>";
//echo $Casanier->__toString();

$Sportif = new Sportif("Pikachu","18","2", "0,85");
//echo Sportif::PATTES."<br>";
//echo $Sportif::FREQUENCE
//echo $Sportif->__toString();

$Mer = new Mer("Rondoudou","45","2",);
//echo Mer::NAGEOIRE."<br>";
//echo $Mer->__toString();

$Croisiere = new Croisiere("Bulbizarre","15","3");
//echo Croisiere::NAGEOIRE."<br>";
//echo $Croisiere->__toString();

?>


<!--on teste ici notre code-->