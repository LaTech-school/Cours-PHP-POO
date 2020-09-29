<?php 

class Moto extends Vehicule 
{
    const WHEELS = 2;
    // const DOORS = 0;

    public function start()
    {
        echo "embrayage<br>";
        echo "tourne la clé<br>";
        echo "Accelère<br>";
    }
}