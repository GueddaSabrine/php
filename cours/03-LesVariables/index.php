<?php
//$nom_de_la_variable = "valeur de la variable";
//$couleur ="Rose";
//$_b=50; //valid
//$p0=62;//Valid
//$p_0=false;//Valid
//$-b=50; //nonValid
//$0p=78;//nonValid
//$p-0="valeur"//nonValid
//<!--//Le PHP est un language faiblement typé-->
//<!--//Local-->
//<!--//Global-->
//<!--//Static-->
//<!--$stagiaire = "Badji";-->
//<!--function priorite(){-->
//<!--    $stagiaire = "Aoukas";-->
//<!--    echo $stagiaire;-->
//<!--}-->
//<!---->
//<!--function-->

$x = "abc";
$xx = 200;

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<!--<h1>--><?php //echo $nom_de_la_variable;?><!--</h1>-->
<!--<h1>--><?php //echo $couleur;?><!--</h1>-->
<!--<h1>--><?php //echo "les noms des variables sont sensible à la casse";?><!--</h1>-->

<h1><?php echo $x ?></h1>;
<h1><?php echo $$x ?></h1>;
<h1><?php echo $abc ?></h1>;

</body>
</html>
