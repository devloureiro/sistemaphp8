<?php 

$primeiroNome = "OSMAR";
$sobreNome = "LOUREIRO";

$nome_completo = $primeiroNome . " " . $sobreNome;

var_dump($nome_completo);

// concatenacao de texto

$texto = "osmar antonio loureiro";
$texto .= " nascido no dia 26 de fereveiro";
$texto .= " o dia mais quente do ano";

echo '<hr>';
echo $texto;

// utilizando o eredock

$texto2 = <<<NINE
<pre>
create mode 100644 operador_comparacao.php
PS C:\xampp-novo\htdocs\sistema> git push
Enumerating objects: 4, done.
Counting objects: 100% (4/4), done.
Delta compression using up to 4 threads
Compressing objects: 100% (3/3), done.
Writing objects: 100% (3/3), 408 bytes | 136.00 KiB/s, done.
Total 3 (delta 1), reused 0 (delta 0), pack-reused 0
remote: Resolving deltas: 100% (1/1), completed with 1 local object.
remote: This repository moved. Please use the new location:
remote:   https://github.com/devloureiro/sistemaphp8.git
To https://github.com/osmarloureiro26/sistemaphp8.git
   6cf4237..60c2d22  main -> main
PS C:\xampp-novo\htdocs\sistema>
</pre>
NINE;

echo $texto2;