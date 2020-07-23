<?php
require_once "Pokemon.php";

abstract class Terrestre extends Pokemon
{
    /**
     * @var int
     */
    private $nbPattes;
    /**
     * @var float
     */
    private $taille;

    protected function __construct(string $nom, float $poid, int $nbPattes, float $taille)
    {
        parent::__construct($nom, $poid);
        $this->nbPattes = $nbPattes;
        $this->taille = $taille;
    }

    protected function getTaille(): int
    {
        return this->taille
    }

    protected function getVitesse(): float
    {
    return 3 * $this->nbPattes * $this->nbPattes;
    }
}