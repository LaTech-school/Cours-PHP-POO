<?php

abstract class Laser {
    public function caracteristique()
    {
        echo "Disque Laser<br>";
    }
}

class CD extends Laser {
    public function caracteristique()
    {
        parent::caracteristique();
        echo "Capacité: 700Mo<br>";
    }
}


class DVD extends Laser {
    public function caracteristique()
    {
        parent::caracteristique();
        echo "Capacité: 4,7Go<br>";
    }
}


$cd = new CD;
$cd->caracteristique();

$dvd = new DVD;
$dvd->caracteristique();