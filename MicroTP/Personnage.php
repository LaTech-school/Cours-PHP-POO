<?php

class Personnage 
{
    /**
     * Nom du personnage
     *
     * @var string
     */
    public $nom;

    /*-)àç! 
     * Age du personnage
     *
     * @var integer
     */
    public $age = 53;


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
}
