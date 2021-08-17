<?php 
// atribuicao por referencia
$total = 200.00;
$valor_a = $total;
//$valor_a /= 2;  //(10 / 2)

echo "meu valor total é " . $valor_a;

// para trabalhar com descontos podemos usar a seguinte manteira
$desconto = 10; // desconto de 10 porcento
$formula = $desconto / 100; // a formula divindo 10 por 100

$valor_a *= $formula; // a variavel valor a vezes a formula
$total_limpo = $total; // para deixar o valor original para fazermos a comparacao.
$total -= $valor_a; // a variavel total menos o valor do desconto

echo '<hr>'.'Valor do desconto'.$valor_a;
echo '<hr>'.'Valor total '. $total_limpo.'  menos o valor de desconto'.$valor_a."é igual a ".$total;
