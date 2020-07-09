<?php
//Les parametres de connexion
$serveur = "localhost";
$user = "root";
$mdp = "";
$bdName ="formation_db";

//on etabli la connexion a la base de données
$connexion = mysqli_connect($serveur, $user, $mdp, $bdName);

if (!$connexion){
    die("<h1>Connexion NOK</h1>");
}

$requete = "create table if not exists stagiaire (
    id int auto_increment, 
    prenom varchar(20) not null,
    salaire int not null,
    constraint pk_stagiaire primary key (id)
)";

$requete = "insert into stagiaire(prenom, salaire)
values ('Badji', 15000);";

if (!mysqli_query($connexion, $requete)){
    echo "<h1>Creation de la table stagiaires ok</h1>";
}else {
    echo "<h1>Creation de la table stagiaires NOK</h1>";
}

//On ferme la connexion
mysqli_close($connexion);

