<?php
require_once "Pokemon.php";

abstract class Terrestre extends Pokemon
{
    const PATTES = "J'ai des pattes";

    function vitesse()
    {
        echo "ma vitesse est de ";
    }
}