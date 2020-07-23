<?php


namespace Damw\Abstraits;


class teresstre extends pokemon
{


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
    /**
     * @var float
     */
    private $taille;

    protected function __construct(string $nom, float $poids, int $nbrPatte, float $taille)
    {
        parent ::_construct($nom,$poids);
        return parent::;
        $this ->  = $nbrnageoire;
        $this->nbrPatte = $nbrPatte;
        $this->poids = $poids;
        $this->nom = $nom;
        $this->taille = $taille;
    }



    protected function getvitesse(): float
    {
    return 3 * $this -> nbrpattes * $this
    }






}