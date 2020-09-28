<?php 

class MyClass {
    public $property_1;
    public $property_2 = "This is a property value !";

    public function method_1() {}
    public function method_2(string $argument)
    {
        $variable = strtoupper($argument);
        return $variable;
    }
}

$myClass = new MyClass();
echo $myClass->property_2 ."<br>";

echo $myClass->method_1() ."<br>";
echo $myClass->method_2("lorem ipsum");