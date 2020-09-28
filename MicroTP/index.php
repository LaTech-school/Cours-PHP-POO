<?php 

include_once "Personnage.php";

$personnage = new Personnage();

echo "<div>Nom (propriété) : ". $personnage->nom ."</div>";
echo "<div>Nom (methode) : ". $personnage->afficheNom() ."</div>";
echo "<div>Age : ". $personnage->age ."</div>";
echo "<div>Dit : ". $personnage->ditBonjour("Claire") ."</div>";
echo "<div>Dit : ". $personnage->ditBonjour("Doug") ."</div>";
echo "<div>Dit : ". $personnage->ditAurevoir() ."</div>";
