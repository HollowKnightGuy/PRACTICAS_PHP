<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intervalo con GET</title>
</head>
<body>
    
<h1>L&iacute;nea creciente</h1>

    <?php

    if (empty($_GET["longitud"]))
        echo "<h2>Introduce la longitud de la línea.</h2>";  
    else {
        $n1 = $_GET["longitud"];
        echo "<h2>Longitud de la línea: $n1</h2>";

        if (!is_numeric($n1)) 
            echo "<h1>Introduce UN NÚMERO</h1>";
        else
            echo "  <svg height='210' width='500'>
                        <line x1='0' y10='0' x2='$n1' y2='0' style='stroke:rgb(0,0,0);stroke-width:10'/>
                    </svg>";    
    }

    ?>


</body>
</html>