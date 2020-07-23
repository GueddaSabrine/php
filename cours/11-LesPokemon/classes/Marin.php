<?php
require_once "Pokemon.php";

abstract class Marin extends Pokemon
{
    /**
     * Marin constructor.
     * @param string $nom
     * @param float $poid
     * @param int $nbrNageoire
     */

    private nbrNageoire;

    protected function __construct(string $nom, float $poid, int $nbrNageoire)
    {
        parent::__construct($nom, $poid);
        $this->nbrNageoire = $nbrNageoire;
    }

    protected function getVitesse(): float
    {
    }

    /**
     * @return int
     */
    protected function getnbrNageoire():int
    {
        return this->nbrNageoire;
    }

    public function __toString()
    {
        $affichage = "<br>J'ai $this->nbrNageoire nageoires";
        return parent::__toString().$affichage
    }
}
