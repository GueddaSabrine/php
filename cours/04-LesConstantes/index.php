<?php
define("MESSAGE","Bonjour PHP"); //Case sensitive

echo "<h1>" .MESSAGE. "</h1>";

define("MSG","Bonjour MSG PHP", true); //Case insensitive

echo "<h1>" .MSG. "</h1>";

echo "<h1>" .MSG. "</h1>";
echo "<h1>" .MSG. "</h1>";

const UNE_CONSTANTE = "UNE constante";

//Les constantes magiques
echo "<h1>Nous sommes la ligne".__LINE__."</h1>";
echo "<h1>Je suis le fichier".__FILE__."</h1>";
echo "<h1>Je suis dans le repértoire".__DIR__."</h1>";

function une_fonction() {
    echo "<h1>je suis une fonction ".__FUNCTION__."</h1>";
}
une_fonction();

?>