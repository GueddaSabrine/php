<?php


abstract class pokemon{
    /**
     * @var string
     */
    private $nom;
    /**
     * @var int
     */
    private $poids;

    public function __construct(string $nom, int $poids)
    {
        $this->nom = $nom;
        $this->poids = $poids;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $couleur
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return int
     */
    public function getPoids(): int
    {
        return $this->poids;
    }

    /**
     * @param int $poids
     */
    public function setPoids(int $poids): void
    {
        $this->poids = $poids;
    }

    abstract function vitesse();

    /**
     * @return mixed
     */
    abstract function vitesse();

    public function __toString()
    {
        return "<h2>Je suis un " . get_class($this) . "<br>Je suis le Pokemon $this->nom<br>Je pèse $this->poids kg</h2>";
    }
}