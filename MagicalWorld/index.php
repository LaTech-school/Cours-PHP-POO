<?php 

class ItsMagic 
{
    public $azerty;

    public function __set($propriete, $valeur)
    {
        echo "On affecte la valeur \"$valeur\" à la propriété\"$propriete\".<br>";
    }
    public function __get($propriete)
    {
        echo "On récup. la valeur à la propriété\"$propriete\".<br>";
    }
}

$magic = new ItsMagic;

$magic->azerty = "Ma Valeur !!!";

sleep(5);

echo $magic->azerty."<br>";
var_dump($magic->azerty);