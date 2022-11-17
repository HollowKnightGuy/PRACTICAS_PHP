<?php

$array = [];
$contador = 0;

for ($num = 0; $num <101; $num++){
    if (($num % 2) == 0) ;
        $array [$contador] = $num;
        $contador++;   
}
print_r($array);