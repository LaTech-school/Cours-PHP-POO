<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class MaClassParent
{
    public $proprieteParent = "Ceci est une propriété de la classe Parent.";
    public function methodeParent()
    {
        return "Ceci est une methode de la classe Parent.";
    }
}

class MaClassEnfant extends MaClassParent
{
    public $proprieteEnfant = "Ceci est une propriété de la classe Enfant.";
    public function methodeEnfant()
    {
        return "Ceci est une methode de la classe Enfant.";
    }
}

echo "<h3>Chez le parent</h3>";
$parent = new MaClassParent;
echo $parent->proprieteParent."<br>";
// echo @$parent->proprieteEnfant."<br>";
echo $parent->methodeParent()."<br>";
// echo @$parent->methodeEnfant()."<br>";

echo "<hr>";

echo "<h3>Chez l'enfant</h3>";
$enfant = new MaClassEnfant;
echo $enfant->proprieteParent."<br>";
echo $enfant->proprieteEnfant."<br>";
echo $enfant->methodeParent()."<br>";
echo $enfant->methodeEnfant()."<br>";

