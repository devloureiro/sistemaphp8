<?php 
// operadores de incrmento ou decremento
$a = 10;

// echo $a++ * 2; desta forma o decremento so passa a valer 
// depois da operacao realizada.
echo "Valor original da minha variavel ". $a. "<hr>";
echo "variavel encrementada antes ". $antes = ++$a ."<hr>";
//echo "antes " . $antes * 2 . "<hr>"; 

echo "depois" .( $depois = $a++  *2 ). "<hr>"; 
//echo "variavel encrementada depois ". $a++ ."<hr>";
echo "variavel encrementada depois ". $depois ."<hr>";