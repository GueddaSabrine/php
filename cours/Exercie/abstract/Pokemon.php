<?php


abstract class pokemon
{
    /**
     * @var string
     */
    private $nom;
    /**
     * @var int
     */
    private $poids;
    /**
     * @var int
     */
    private $vitesse;

    public function __construct(string $nom, int $poids, int $vitesse)
    {
        $this->nom = $nom;
        $this->poids = $poids;
        $this->vitesse = $vitesse;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
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

    /**
     * @return int
     */
    public function getVitesse(): int
    {
        return $this->vitesse;
    }

    /**
     * @param int $vitesse
     */
    public function setVitesse(string $vitesse): void
    {
        $this->vitesse = $vitesse;
    }

    abstract function frequence();

    public function __toString()
    {
        return "<h2>Je suis un " . get_class($this) . "<br>Je suis le Pokemon $this->nom<br>Je pèse $this->poids kg <br>Ma vitesse est de  $this->vitesse km/h</h2>";
    }
}