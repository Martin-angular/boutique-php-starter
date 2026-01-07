<?php

$tab1 = ["t-shirt","jean","fringue"];
$tab2 = ["ceinture","montre","bijoux"];
$tab3 = [ "test"];

$alltab = $tab1 . $tab2;

var_dump( $alltab );

$total= count($tab1) + count($tab2);

echo$total;

array_splice($tab1,2,0, "test");
print_r($tab1)

?>