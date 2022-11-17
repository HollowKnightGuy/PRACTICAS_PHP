<?php
function mostrarArray($array){
    foreach($array as $num){
        echo " ".$num." ";
    }
}

for($posi = 0; $posi < 8; $posi++){
    $numeros[$posi] = random_int(1,100);
}


echo "<h2>Array</h2>";

mostrarArray($numeros);


echo "<br> <h2>Array ordenada</h2>";
sort($numeros);

mostrarArray($numeros);


echo "<br> <h2>Numero de elementos</h2>";
echo count($numeros). " Elementos";


echo "<br> <h2>Buscamos un elemento aleatorio del Array</h2>";
echo $numeros[rand(0, (count($numeros) - 1))];


echo "<br> <h2>Busquemos un elemento en array a traves de la URL. Pasa el numero</h2>";

if (empty($_GET["num"])){
    echo "No has puesto parámetro";
} elseif (in_array($_GET["num"], $numeros)){
    echo "Si existe";

} else{
    echo "Ese numero no existe";

}