<?php
//var_dump($_GET);
//echo "<h1>".$_GET[prenom]"</h1>";
//echo "<h1>".$_GET[age]"</h1>";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire GET</title>
</head>
<body>
<form METHOD="post">
<!--    <p>-->
<!--        <label for="prenom">Prenom</label>-->
<!--        <input type="text"/>-->
<!--    </p>-->
<!--    <p>-->
<!--        <label for="prenom">Age</label>-->
<!--        <input type="text"/>-->
<!--    </p>-->
<!--    <p>-->
<!--        <input type="submit" value="Valider"/>-->
<!--    </p>-->
<!--</form>-->
<!--//////////////////////TEMPERATURE/////////////////////-->
    <div>
        <form method="post">
            <p>
                <label for
            </p>

        </form>
    </div>
<!--////////////////////////////MENUE DEROULANT AVEC FORMULAIRE-->
    <div>
        <form method="post">

            <input type="number" id="choix1" name="$choix1">
            <select name="operateur" id="operateur">
                <option>+</option>
                <option>-</option>
                <option>/</option>
                <option>*</option>
            </select>

            <input type="number" id="choix2" name="$choix2">
            <input type="number" id="resultat" name="$resultat">

            <?php
            $choix1= $_POST['choix1'];
            $choix2= $_POST['choix2'];
            $resultat= $choix1 + $choix2;
            ?>

        </form>
    </div>




</body>
</html>

<?php
//echo "<h1>Bonjour " . $_GET['prenom'] . ", Vous avez " . $_GET['age'] . " ans</h1>";
//echo "<h1>Bonjour " . $_POST['prenom'] . ", Vous avez " . $_POST['age'] . " ans</h1>";
?>
