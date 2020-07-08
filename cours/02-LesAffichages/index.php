<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les Affichages</title>
</head>
<body>

<?php echo "<h1>Le PHP est un language très facile à apprendre, affichage avec echo</h1>"?>
<?php print "<h1>Le PHP est un language très facile à apprendre, affichage avec print</h1>"?>

<?php
    echo "<h1>Le PHP est un language très facile à apprendre, affichage avec echo</h1>";
    print "<h1>Le PHP est un language très facile à apprendre, affichage avec print</h1>";

    echo ("<h1>Le PHP est un language très facile à apprendre, affichage avec echo</h1>");
    print ("<h1>Le PHP est un language très facile à apprendre, affichage avec print</h1>");


    $texte1 = "le php est cool";
    $texte2 = "j4lcorporation.com";

    $m = 20;
    $n = 13;

    echo "<h1>$texte1</h1>";

    echo $m + $n;
    echo "<br>";
    print $m + $n;
    echo "<br>";
    $resultat = print $m + $n;
    echo "<br>";
    echo $resultat;
    echo "<br>";

var_dump($texte1);
echo "<br>";
var_dump($m);

//Les Affichages

?>

</body>
</html>
