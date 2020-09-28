<?php 

include_once "Personnage.php";

$francis = new Personnage("Francis");
$bob = new Personnage("Bob");

echo "<div>Nom (propriété) : ". $francis->nom ."</div>";
echo "<div>Nom (methode) : ". $francis->afficheNom() ."</div>";
echo "<div>Age : ". $francis->age ."</div>";
echo "<div>Dit : ". $francis->ditBonjour("Claire") ."</div>";
echo "<div>Dit : ". $francis->ditBonjour("Doug") ."</div>";
echo "<div>Dit : ". $bob->ditBonjour("Francis") ."</div>";
echo "<div>Dit : ". $francis->ditAurevoir() ."</div>";
