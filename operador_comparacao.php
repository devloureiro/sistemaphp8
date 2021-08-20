<?php 

$valorA = "10";
$valorB = 10;
var_dump($valorA === $valorB);
var_dump(10 > 2);

// para aparecer valores que nao forem nulos
$valorC = NULL;
var_dump($valorC ?? "o valor esta nulo");
// as ?? serve para comprar se esta nulu ou nao.
