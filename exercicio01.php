<?php
//criar um array com tres tecnologias que pretendo aprender
$var_nome = "osmar loureiro";
$var_idade = 35;
$var_esporte = "Futebol";

//curso que vou aprender
$cursos_que_vou_aprender = ['java' , 'php','javascript'];
// fiz um print com os itens do array mostrando o que vou aprender em sua ordem cronologica.
print "primeiro vou aprender" . $cursos_que_vou_aprender[0] . "depois vou aprender" . $cursos_que_vou_aprender[1] .
"por ultimo vou aprnder" . $cursos_que_vou_aprender[2];

//converter a variavel idade em string e mostrar com vardump o valor dela antes e depois da conversao
var_dump($var_idade);
$var_idade = "35"; //converti para string apenas colocando aspas simples.
var_dump($var_idade);

//imprima na tela os valores denome , idade ,e esporte predileto por meio de uma funcao
function exibir(){
    //defino as variaveis para o escopo da funcao dizendo que sao do tipo globais
    global $var_nome;
    global $var_idade;
    global $var_esporte;
    echo "Meu nome é  .:" .$var_nome."Minha idade é  .:".$var_idade."Meu esporte favorito é.:". $var_esporte;
}
echo exibir();
