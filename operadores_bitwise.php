<?php
// fazendo comparacao de bit
 

$valorA = 32;
$quantidade = 2;

$valorA = $valorA << $quantidade; // deslocando um bit para esquerda

echo $valorA;

// explicacao de binarios
// sempre separados em casa de 4 decimais
// valor correpondente a binario é 0010 0000 = 32
// 128 64 32 16 8 4 2 1
//  0  1  0   0  0 0 0 0
// deslocando um para esquerda fica 0100 0000 = 64 

