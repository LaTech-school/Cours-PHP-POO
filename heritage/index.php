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
    public function methodeParent()
    {
        return "Ceci est la methode parent surchargée dans la classe Enfant.";
    }
}

class MaClassPetitEnfant extends MaClassEnfant
{
    public $proprietePetitEnfant = "Ceci est une propriété de la classe Petit Enfant.";
    public function methodePetitEnfant()
    {
        return "Ceci est une methode de la classe Petit Enfant.";
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

echo "<hr>";

echo "<h3>Chez le petit enfant</h3>";
$petitEnfant = new MaClassPetitEnfant;
echo $petitEnfant->proprieteParent."<br>";
echo $petitEnfant->proprieteEnfant."<br>";
echo $petitEnfant->proprietePetitEnfant."<br>";
echo $petitEnfant->methodeParent()."<br>";
echo $petitEnfant->methodeEnfant()."<br>";
echo $petitEnfant->methodePetitEnfant()."<br>";

