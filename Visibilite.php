<?php

class Visibilite
{
    public $ma_propriete_public = "Cette propriété est PUBLIC";
    private $ma_propriete_privee = "Cette propriété est PRIVEE";

    public function lire_la_propriete_privee()
    {
        return $this->ma_propriete_privee;
    }
}


$visibilite = new Visibilite;

echo $visibilite->ma_propriete_public."<br>";
// echo $visibilite->ma_propriete_privee."<br>";
echo $visibilite->lire_la_propriete_privee()."<br>";

echo "<hr>";

$visibilite->ma_propriete_public = "Propriété public modifiée";

echo $visibilite->ma_propriete_public."<br>";
// echo $visibilite->ma_propriete_privee."<br>";
// $visibilite->ma_propriete_privee = "Propriété privee modifiée";
echo $visibilite->lire_la_propriete_privee()."<br>";