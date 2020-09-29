<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class PorteeStatic
{
    // Une constate aura toujours une portée STATIC
    const MA_CONTANTE = "Ceci est une constante";

    public $propriete_non_static = "Ceci est une propriété non static";
}


$instance = new PorteeStatic;

// echo $instance->MA_CONTANTE."<br>";  // NON
echo $instance::MA_CONTANTE."<br>";     // OK, mais pas joli
echo PorteeStatic::MA_CONTANTE."<br>";  // Bonne pratique ;-)

echo "<hr>";

echo $instance->propriete_non_static."<br>";        // Bonne pratique ;-)
// echo $instance::propriete_non_static."<br>";     // NON
// echo $instance::$propriete_non_static."<br>";    // NON
// echo PorteeStatic::$propriete_non_static."<br>"; // NON

echo "<hr>";



