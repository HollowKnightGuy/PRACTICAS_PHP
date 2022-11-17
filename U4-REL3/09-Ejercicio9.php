
<?php

$provincias = ["Granada", "Almería", "Jaén", "Córdoba", "Huelva", "Cádiz", "Málaga"];

function borrarProvincia($array, $indice){
    
    unset($array[$indice]);
    return $array;
}

echo "<br> Provincias <br>";
$contador = 0;
foreach($provincias as $provincia){
    echo "$contador : $provincia <br>";
    $contador += 1;
}

$provincias = borrarProvincia($provincias, 2);

echo "<br> Provincias nuevas <br>";
$contador = 0;
foreach($provincias as $provincia){
    echo "$contador : $provincia <br>";
    $contador += 1;
}

?>