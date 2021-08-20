<?php 
// executando comandos diretos no pc
$resultado = `dir`;

// por padrao o sistema do windows tem que fazer a conversao para
// ficar tudo bonitinho no mesmo lugar;

$oem = sapi_windows_cp_get("oem");
$resultado = sapi_windows_cp_conv(
    $oem,
    65001,
    $resultado
);
echo "<pre>$resultado</pre>";