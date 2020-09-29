<?php 


function MonChargementAutomatique($classname)
{
    include_once $classname.".php"; 
}
spl_autoload_register("MonChargementAutomatique");

// $bar = new Bar;
$foo = new Foo;


$foo->method();
// $foo->method();