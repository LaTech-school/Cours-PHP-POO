<?php 

include "vendor/autoload.php";

$string = "Bananas,    Apples     ,    Coconuts";
print_r( xtrim(",", $string) );
