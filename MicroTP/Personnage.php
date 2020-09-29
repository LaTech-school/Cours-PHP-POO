<?php

class Personnage 
{
    /**
     * Nom du personnage
     *
     * @var string
     */
    private $nom;

    /*
     * Age du personnage
     *
     * @var integer
     */
    private $age;

    public function __construct(string $nom, int $age)
    {
        $this->nom = $nom;
        $this->age = $age;
    }


    /**
     * Read the name
     *
     * @return string
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * Write the name
     *
     * @param string $nom
     * @return self
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }



    /**
     * Dire bonjour
     *
     * @param string $prenom
     * @return string
     */
    public function ditBonjour(string $prenom): string
    {
        return "Bonjour $prenom";
    }

    /**
     * Dire au revoir
     *
     * @return string
     */
    public function ditAurevoir(): string
    {
        return "Au revoir";
    }

    /**
     * Affiche le nom du personnage
     *
     * @return string
     */
    public function afficheNom(): string
    {
        return $this->nom;
    }

    /**
     * Get age du personnage
     *
     * @return  integer
     */ 
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * Set age du personnage
     *
     * @param  integer  $age  Age du personnage
     *
     * @return  self
     */ 
    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }
}
