<?php
echo "<h1> Suma de números </h1>";

$opes = array
(
    "sumar" => '+',
    "restar" => '-',
    "multiplicar" => '*',
    "dividir" => '/'
);

if (
    (empty($_GET["num1"])) || 
    (empty($_GET["num2"])) || 
    (empty($_GET["op"]))){
    echo "Rellena todos los parámetros!";

}elseif (
    (is_numeric($_GET["num1"])) && 
    (is_numeric($_GET["num2"]))){

    
    if (in_array($_GET["op"], $opes)){
        echo "El resultado es ".($_GET["num1"].$opes[$_GET["op"]].$_GET["num2"]);
    }
    else{
        echo "No existe esa operación";
    }
    
}else{
    echo "Ingresa los parámetros correctamente!";
}



?>