<?php
//pour se connceter a une BDD, on va utlisier les fonctions
//mysql_connect
//PDO::_construct

//Les parametres de connexion
$serveur = "localhost";
$user = "root";
$mdp = "";

$connexion = mysqli_connect($serveur, $user, $mdp);

if (!$connexion)){
    die("<h1>Connexion NOK</h1>");
}
echo "<h1>Connexion OK</h1>";

//Pour executer des requetes on utilise les fonctions
//mysqli_query
//PDO::__query

$requete = "create database if not exists formationdb;";

//On ferme la connexion
mysqli_close($connexion);