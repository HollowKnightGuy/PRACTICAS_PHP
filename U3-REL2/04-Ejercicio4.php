<?php
echo "<h1>Elevemos un número</h1><br>";

function potencias($base, $exponente = 2){

    return $base ** $exponente;
}

if (
    (empty($_GET["base"])) 
    ){
    echo "Rellena los parámetros";

    }elseif((empty($_GET["exp"]))){
        echo "El resultado de ".$_GET["base"]." elevado a ".(2)." es ".potencias($_GET["base"]);
    }
    else{
        echo "El resultado de ".$_GET["base"]." elevado a ".$_GET["exp"]." es ".potencias($_GET["base"], $_GET["exp"]);
    }


