<?php

function crearComplementaria($array){
    $posicion = 0;
    foreach ($array as $valor){
        if ($valor == 1){
            $complementaria[$posicion] = 0;
        } else{
            $complementaria[$posicion] = 1;
        }
        $posicion += 1;
    }
    return $complementaria;
}

function mostrarArray($array){
    foreach($array as $num){
        echo " ".$num." ";
    }
}

for($posi = 0; $posi < 8; $posi++){
    $numeros[$posi] = random_int(0,1);
}

$complementaria = crearComplementaria($numeros);
echo "A: ";
echo mostrarArray($numeros);
echo "<br>";
echo "B: ";
echo mostrarArray($complementaria);