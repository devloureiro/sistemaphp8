<?php
// para ignorar o erro é so colocar o @
//$resultado = @file("132132132");
$resultado = @file("132132132") or die
("nao foi possivel encontrar o arquivo");