<?php
require_once "functions/utils.php";

$serveur = "localhost";
$database = "formation_db";
$user = "root";
$pass = "";

$url = "mysql:host=$serveur;dbname=$database";

$connexion = new PDO($url, $user, $pass);

template_en_tete_page("Accueil");
?>

<!-- PAGE ACCUEUIL -->
<div>
    <h1>Accueil</h1>
    <hr>
    Bonjour, vous êtes sur la page d'accueil

</div>

<?php
template_pied_page();
?>

