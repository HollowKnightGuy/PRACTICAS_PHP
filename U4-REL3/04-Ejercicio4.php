<?php

function crearArray(){
    $posi = 0;

    for($posi; $posi < 20; $posi++){
        $numeros[$posi] = random_int(0,100);
    }
    return $numeros;
}

function arrayCuadrado($array){
    $posi = 0;
    foreach($array as $valor){
        $cuadrados[$posi] = ($valor*$valor);
        $posi += 1;
    }
    return $cuadrados;
}

function arrayCubo($array){
    $posi = 0;
    foreach($array as $valor){
        $cuadrados[$posi] = ($valor*$valor*$valor);
        $posi += 1;
    }
    return $cuadrados;
}


$numeros = crearArray();
$arrayCuadrada = arrayCuadrado($numeros);
$arrayCubo = arrayCubo($numeros);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <table border="1">
        <tr>
            <td>Numero</td>
            <td>Cuadrado</td>
            <td>Cubo</td>
        </tr>
        <?php for ($i = 0; $i < 20; $i++){
            echo "<tr><td>".$numeros[$i]."</td><td>".$arrayCuadrada[$i]."</td><td>".$arrayCubo[$i]."</td></tr>";
            }
        ?>
    </table>

</body>
</html>


