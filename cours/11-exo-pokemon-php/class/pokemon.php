<?php


namespace Damw\Abstraits;


abstract class pokemon
{

    /**
     * @var string
     */
    private $poids;
    /**
     * @var int
     */
    private $nom;

    float poids;
    string $nom;

    protected function _construct(string $nom, float $poids)
    {
        this->nom = $nom;
        this->poids = $poids;


        public function getNom (...): string{
        return$this-> nom = $nom;
    }
        public function getPoids (...); float{
        return$this-> poids = $poids;
    }

        public function setPoids ( float $poids): void{
            return$this-> poids = $poids;
    }
        abstract function getvitesse (): float;
        public function _toString()
    {
            $affichage = "je suis le pokemon $this -> nom <br>".
            "mon poids est $this -> ->poids kg<br>".
            "ma vitesse est $this -> getvitesse est (km/h)";
                return $affichage;
    }





}