<?php
//?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conversion</title>

</head>
<body>
<div>
    <form method="post">
        Entrez nombre A <input name="A"/>
        <select name="operator">
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
        </select>
        Entrez nombre A <input name="A"/>
        <input name="submit" name="cal" valeur="="/>

        <?php

        if (isset($_POST['cal'])) {
            $A = $_POST['A'];
            $B = $_POST['B'];
            if ($_POST['operator'] == '+')
                echo $A + $B;
            else if ($_POST['operator'] == '-')
                echo $A - $B;
            else if ($_POST['operator'] == '*')
                echo $A * $B;
            else if ($_POST['operator'] == '/')
                echo $A / $B;
        }

        ?>
    </form>
</div>
</body>
</html>
