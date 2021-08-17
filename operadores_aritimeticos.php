<?php 
/*
+$a (identidade) conversao de $a para int ou float conforme apropriado.
-$a (negacao) oposto de +$a
$a + $b (Adicao) Soma de A + B
$a - $b (Subtracao) Diferenca entre $a e $b
$a * $b (Muliplicacao) Produto de $a e $b
$a / $b (Divisao) Quociente de $a e $b
$a % $b (Modulo) Resto de $a dividido por $b
$a ** $b (Exponencial) Resultado de $a elevado a $b (Foi introduzido no php6)
*/
$valor = "10.5"; // este valor esta como string
$valor = +$valor; // adicionando o sinal de + , eu tranformo ela em inteiro.

var_dump(-$valor); // dentro do var_dump posso colocar os sinais para ver as mudancas
echo'<hr>';
var_dump(10 + 2);
echo'<hr>';
var_dump(10 - 2);
echo'<hr>';
var_dump(10 * 2);
echo'<hr>';
var_dump(10 / 2);
echo'<hr>';
var_dump(10 % 2);
echo'<hr>';
var_dump(10 ** 2);
echo'<hr>';
