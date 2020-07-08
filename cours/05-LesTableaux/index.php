<?php
$stagiaires = array("Badji","Fabrice","Aoukas","Souly","Bakus","Sabrine","Talia");
var_dump($stagiaires);

echo "<br/>";

$stagiaires = ["Badji","Fabrice","Aoukas","Souly","Bakus","Sabrine","Talia"];
var_dump($stagiaires);

//echo "<br/>";
//echo "<h1>".$stagiaires[3]."</h1>";

/////////////////////////////////////////////
////Les tableaux associatifs
$description = [
    "prenom" => "Joachim",
    "age" => 51,
    "sexe" => "M",
];

echo "<h1>".$description["age"]." ans</h1>";
echo "<h1>".var_dump($description)."</h1>";

////////////////////////////////////////////
//function entre_1_10($var){
//    if(1 <= $var && $var <= 10){
//        echo "<h1>Vous avez saisie".$var."</h1>";
//    }else{
//        echo "<h1>La valeur n'est pas comprise entre 1 et 10'</h1>";
//    }
//}
//entre_1_10(3);
//entre_1_10(15);
//////////////////////////////////////////////

foreach ($stagiaires as $stagiaires){
    echo "<h1>Je suis le stagiaire $stagiaires</h1>";
}

//echo "<h1>".$cle.

//var_dump($GLOBALS);
//var_dump($_COOKIE);
var_dump($_GET);
var_dump($_POST);


?>

