<?php 

$a = ["gol" , "latam", "Azul"];
$b = ["Qtar" , "Varig" , "nihon" ,
     "Qtar2" , "Varig2" , "nihon2"
     ];

// unindo dois arrays

$c = $a + $b; // ele faz um merge

var_dump($c);

$d = [200, 50, 35];
$e = [2 =>35, 0 => 200, 1 =>"50"];

var_dump($d == $e);
var_dump($d === $e); // verficar tipos de dados;

