<?php

echo "<h1>Ingresa dos números y mostrare los numeros impares comprendidos entre estos</h1>";
echo "<h2>El primero debe ser menor</h2>";

if (
    (empty($_GET["num1"])) || 
    (empty($_GET["num2"]))){
    echo "Rellena todos los parámetros!";

}elseif (
    (is_numeric($_GET["num1"])) && 
    (is_numeric($_GET["num2"])) && 
    ($_GET["num1"] < $_GET["num2"])){
    
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    echo "<h3>Numeros impares comprendidos del $num1 al $num2</h3>";
    for ($num1++; $num1 < $num2; $num1++){
        if ($num1 % 2 === 1){
            echo $num1."<br>";
        }
    }

}else { 
    echo "Ingresa los parámetros correctamente!";
}