<?php

$num = 0;
$contador = 0;
$cuadrados = [];

while ($contador < 41){
    $cuadrados[$contador] = ($num*$num);
    $num++;
    $contador++;
}

print_r($cuadrados);

?>