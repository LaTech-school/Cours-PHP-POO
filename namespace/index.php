<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "class1.php";
include "class2.php";
include "class3.php";

// $foo1 = new Foo;
// $foo1->Bar();

// $foo2 = new Nasa\Foo;
// $foo2->Bar();

// $foo3 = new SpaceX\Foo;
// $foo3->Bar();


// Je demande à utiliser Foo de l'espace de nom de la Nasa
use Nasa\Foo;

// Je donne un alias a ma class
use SpaceX\Foo as MaSuperClassFoo;

// Sans preciser l'espace de nom lors de l'instance
// C'est la classe du dernier espace de nom utilisé qui sera instanciée.
$foo1 = new Foo;
$foo1->Bar();

$foo2 = new MaSuperClassFoo;
$foo2->Bar();
