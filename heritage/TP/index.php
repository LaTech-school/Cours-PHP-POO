<?php

// include_once "Vehicule.php";
// include_once "Voiture.php";
// include_once "Moto.php";

function MonChargementAutomatique($classname)
{
    include_once $classname.".php"; 
}
spl_autoload_register("MonChargementAutomatique");


// $vehicule = new Vehicule("electric", "pink");
// echo "Motor : ". $vehicule->getMotor()."<br>";
// echo "Color : ". $vehicule->getColor()."<br>";

// echo "<hr>";

$voiture_1 = new Voiture("thermic", "Red");

echo "Motor : ". $voiture_1->getMotor()."<br>";
echo "Color : ". $voiture_1->getColor()."<br>";
echo "Wheels : ". $voiture_1->getWheels()."<br>";
echo "Doors : ". $voiture_1->getDoors()."<br>";
echo "Start : ". $voiture_1->start()."<br>";
echo "Open : ". $voiture_1->openDoor()."<br>";
echo "azert : ". $voiture_1->azert()."<br>";
// echo Voiture::WHEELS."<br>";
// echo Voiture::DOORS."<br>";

echo "<hr>";

$moto_1 = new Moto("electric", "Green");

echo "Motor : ". $moto_1->getMotor()."<br>";
echo "Color : ". $moto_1->getColor()."<br>";
echo "Wheels : ". $moto_1->getWheels()."<br>";
echo "Doors : ". $moto_1->getDoors()."<br>";
echo "Start : ". $moto_1->start()."<br>";
// if (method_exists($moto_1, 'openDoor'))
// {
    echo "Open : ". $moto_1->openDoor()."<br>";
// }
echo "azert : ". $moto_1->azert()."<br>";

// echo Moto::WHEELS."<br>";
// echo Moto::DOORS."<br>";