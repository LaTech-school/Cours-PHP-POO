<?php

class Personnage 
{
    /**
     * Nom du personnage
     *
     * @var string
     */
    public $nom = "Francis";

    /**
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
}
