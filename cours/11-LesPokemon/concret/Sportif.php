<?php

class Sportif extends Terrestre
{
    /**
     * @var float
     */
    private $freqCardiaque;

    public function __construct(string $nom, float $poid, int $nbPattes, float $taille, float $freqCardiaque)
    {
        parent::__construct($nom, $poid, $nbPattes, $taille);
        $this->freqCardiaque = $freqCardiaque;
    }

    public function __toString()
    {
        $affichage "Ma frequence cardiaque est de $this->freqCardiaque pulsation/min";
       return "<h4>".parent::__toString(). $affichage. "</h4>"
    }
}

