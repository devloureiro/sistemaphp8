<?php
/// escopo de variavel no php8 , onde a variavel é vista
// escopo global
$nome = "osmar antonio loureiro";

// echo $nome;

//variavel esta visivel apenas dentro da função.
function exibir ()
// escopo local
{
    global $nome;
    echo $nome; // colocando que posso ver o valor desta variavel fora.
    
}
 exibir();
