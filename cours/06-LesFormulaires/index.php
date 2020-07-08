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
    <p>
        <label for="prenom">Prenom</label>
        <input type="text"/>
    </p>
    <p>
        <label for="prenom">Age</label>
        <input type="text"/>
    </p>
    <p>
        <input type="submit" value="Valider"/>
    </p>

</form>
</body>
</html>

<?php
//echo "<h1>Bonjour " . $_GET['prenom'] . ", Vous avez " . $_GET['age'] . " ans</h1>";
//echo "<h1>Bonjour " . $_POST['prenom'] . ", Vous avez " . $_POST['age'] . " ans</h1>";
?>