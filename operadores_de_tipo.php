<?php 
// vamos verificar com instaceof

class Carro {


}

class Moto {


}

$fusca = new Carro();

var_dump($fusca instanceof Carro);
var_dump($fusca instanceof Moto);