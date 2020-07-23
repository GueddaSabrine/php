<?php


abstract class Pokemon
{
    /**
     * @var string
     */
    private $nom;
    /**
     * @var int
     */

    float poid;
    string nom;

    private $poid;
    private $nom;
    private $poid;

    public function __construct(string $nom, float $poid)
    {    $this->nom = $nom;
        $this->poid = $poid;
    }

    public function getNom(): string
    {   return$this->nom;
    }

    public function getPoid(): float
    {   return$this->poid;
    }

    public function getPoid(float $poid): void
    {   return$this->poid;
    }

    abstract function getVitesse(): float ;
    public function __toString()
    {
        $affichage = "Je suis le Pokemon $this->nom<br>
                        Mon poids est $this->poid kg<br>
                        Ma vitesse est de $this->getVitsse() km/h";

            return$affichage;
    }
}
