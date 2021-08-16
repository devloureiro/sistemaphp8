<?php
// fazendo testes de referencias no php

//atribuicao por referencia
// passagem de paramenttro por referencia
// retorno por referencia

$a = 50;
// usando o & estou fazendo atribuição
$b = &$a;
$c = $a;

var_dump("a" ,$a);
var_dump("b" ,$b);
var_dump("c" ,$c);

$a = 250; // mudando o valor no momento.

var_dump("a" ,$a);
var_dump("b" ,$b);
var_dump("c" ,$c);

