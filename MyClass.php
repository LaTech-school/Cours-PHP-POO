<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class MyClass 
{
    // Constantes
    // --

    const MY_CONSTANT = "This is a constant value";


    // Proprietes
    // --

    public $property_1;
    private $property_2 = "This is a property value !";


    // Methodes
    // --

    public function __construct()
    {
        echo "Un objet de MyClass est créé.<br>";
    }

    public function method_1() 
    {
        return self::MY_CONSTANT;
    }
    public function method_2(string $argument)
    {
        $variable = strtoupper($argument);
        return $variable;
    }
    public static function metrhod_3()
    {
        return self::MY_CONSTANT;
    }
    public function metrhod_4()
    {
        return $this->property_2;
    }
}


$myClass = new MyClass();

// echo $myClass->property_2 ."<br>";

// echo $myClass->method_1() ."<br>";
// echo $myClass->method_2("lorem ipsum")."<br>";
// echo MyClass::MY_CONSTANT ."<br>";
// echo MyClass::metrhod_3() ."<br>";

// echo $myClass->metrhod_4()."<br>";