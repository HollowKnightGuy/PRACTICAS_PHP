<?php

$longitudArray = rand(20,30);

function crearArrayEmojis($longitud){
    for($posi = 0; $posi < $longitud; $posi++){
        $emoji = random_int(128000,128060);
        $emojis[$posi] = $emoji;
    }
    return $emojis;
}

$arrayemojis = crearArrayEmojis($longitudArray);

echo "<h3>Emojis</h3>";

foreach ($arrayemojis as $valor){
    print(" &#".$valor);
}


echo "<h3>Emoji a eliminar</h3>";

$emojieliminar = $arrayemojis[array_rand($arrayemojis)];
$posicion = array_search($emojieliminar, $arrayemojis);

print("&#".$emojieliminar);

unset($arrayemojis[$posicion]);


echo "<h3>Nueva array</h3>";

foreach ($arrayemojis as $valor){
    print(" &#".$valor);
}
