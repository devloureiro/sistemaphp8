<?php 
/**
 *  
 * 
 */
$var_preco = 1000.00;
$var_desconto = 10; // este valor é em porcentagem;
$var_frete = 35.49;

$total = ($var_preco *(1- ($var_desconto /100)) + $var_frete); 

$compra = $total <= $var_preco && $total < 1020;

var_dump($compra);
var_dump($total);