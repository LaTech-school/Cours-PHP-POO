<?php

include_once "Vehicule.php";
include_once "Voiture.php";
include_once "Moto.php";

$voiture_1 = new Voiture("thermic", "Red");

echo "Motor : ". $voiture_1->getMotor()."<br>";
echo "Color : ". $voiture_1->getColor()."<br>";
echo "Wheels : ". $voiture_1->getWheels()."<br>";
echo "Doors : ". $voiture_1->getDoors()."<br>";
// echo Voiture::WHEELS."<br>";
// echo Voiture::DOORS."<br>";

echo "<hr>";

$moto_1 = new Moto("electric", "Green");

echo "Motor : ". $moto_1->getMotor()."<br>";
echo "Color : ". $moto_1->getColor()."<br>";
echo "Wheels : ". $moto_1->getWheels()."<br>";
echo "Doors : ". $moto_1->getDoors()."<br>";
// echo Moto::WHEELS."<br>";
// echo Moto::DOORS."<br>";