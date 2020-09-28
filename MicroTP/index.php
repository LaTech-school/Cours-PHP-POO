<?php 

include_once "Personnage.php";

$personnage = new Personnage();

echo "<div>Nom : ". $personnage->nom ."</div>";
echo "<div>Age : ". $personnage->age ."</div>";
