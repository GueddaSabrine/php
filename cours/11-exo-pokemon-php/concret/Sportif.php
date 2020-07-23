<?php


namespace damw\concrets

use damw\abstraits\terrestre;


class Sportif extends terrestre
{

    /**
     * @var float
     */
    private $frequencecardiaque;
    /**
     * @var float
     */
    private $taille;
    /**
     * @var int
     */
    private $nbrPatte;
    /**
     * @var float
     */
    private $poids;
    /**
     * @var string
     */
    private $nom;

    protected function __construct(string $nom, float $poids, int $nbrPatte, float $taille, float $frequencecardiaque)
    {
        parent ::_construct($nom,$poids,$nbrpatte,$taille);
        $this->frequencecardiaque = $frequencecardiaque;

        $this->nom = $nom;
        $this->nbrPatte = $nbrPatte;
        $this->poids = $poids;
        $this->taille = $taille;
    }
    public function _tostring()
    {
        $affichage = "<br> ma frequence cardiaque est $this-> frequencecardiaque pulsation/min  ";
    }
}

