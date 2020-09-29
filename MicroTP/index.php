<?php 

include_once "Personnage.php";

$francis = new Personnage("Francis", 53);
$bob = new Personnage("Bob", 2);

// echo "<div>Nom (propriété) : ". $francis->nom ."</div>";
echo "<div>Nom (methode) : ". $francis->getNom() ."</div>";
// echo "<div>Age : ". $francis->age ."</div>";
echo "<div>Age : ". $francis->getAge() ."</div>";
echo "<div>Dit : ". $francis->ditBonjour("Claire") ."</div>";
echo "<div>Dit : ". $francis->ditBonjour("Doug") ."</div>";
echo "<div>Dit : ". $bob->ditBonjour("Francis") ."</div>";
echo "<div>Dit : ". $francis->ditAurevoir() ."</div>";
