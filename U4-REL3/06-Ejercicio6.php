<?php

function mostrarArray($array){
    //Muestra la array
    foreach($array as $num){
        echo " ".$num." ";
    }
}

function crearArray(){
    //Crea una array de 15 elementos
    for($posi = 0; $posi < 15; $posi++){
        $numeros[$posi] = random_int(1,100);
    }
    return $numeros;
}


echo "<h3>Array normal</h3>";

$array_num = crearArray();
mostrarArray($array_num);

echo"<br><br>";
echo "<h3>Array modificada</h3>";


for ($i = 0; $i < 14; $i++){
    //Cogemos el primer elemento y lo colocamos en utima posicion 14 veces
    array_push($array_num, array_shift($array_num));
}

mostrarArray($array_num);


