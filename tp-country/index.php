<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "CountryCapital.php";



$file_path = "europa.json";
$file_content = file_get_contents($file_path);
$array = json_decode($file_content, true);

echo "<pre>";
print_r( array_search("Belgiqueeee", $array[4]) );
echo "</pre>";

$europa = new CountryCapital("europa.json");
// $europa->getCapitalByCountry("France");
$europa->getCountryByCapital("Paris");
// $europa->getCapitals();
// 
// $america = new CountryCapital("america.json");