<?php


namespace Damw\Abstraits;


class marin extends pokemon
{
    /**
     * @param string $nom
     * @param float $poids
     * @param int $nageoir
     * @return float
     */
    private $nbrnageoire;

    protected function _construct(string $nom, float $poids, int $nbrnageoire)
    {
        parent ::_construct($nom,$poids);
        return parent::_construct($nom, $poids);
        $this -> nbrnageoire = $nbrnageoire;
    }
        protected function getvitesse(): float
    {

    }

    /**
     * @return int
     */
    public function getNageoir():int{
        return $this ->nbrnageoire;
    }
    public function _tostring()
    {
        $affichage = "<br> j\'ai $this -> nbrnageoire ";
        return parent :: _toString . $affichages;
    }


}