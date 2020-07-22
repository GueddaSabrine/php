<?php
require_once "Pokemon.php";

abstract class Marin extends Pokemon
{
    const NAGEOIRE = "J'ai des pattes";

    function vitesse()
    {
        echo "ma vitesse est de ";
    }
}