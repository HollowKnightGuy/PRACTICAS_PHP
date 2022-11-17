<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>

    <button><a href="./borrar_cookies.php">Borrar cookie</a></button>
    <button><a href="index.php">Refrescar</a></button>

    <?php

        function sacarFecha(){
            setlocale(LC_TIME,"Spanish");
            $dia = strftime("%A %d de %B del %Y ");
            $hora = date("H:i:s");
            $fecha = $dia." ".$hora;
            return $fecha;
        
        }

        if(!isset($_COOKIE['visi'])){

            setcookie("visi",'1',time()+100);
            setcookie("fe[0]",sacarFecha(),time()+100);

            echo "<h2>Bienvenido por primera vez</h2>";
            
        }else{

            $visitas=(int) $_COOKIE['visi'];
            $visitas++;
            $fecha=sacarFecha();
            
            setcookie('visi',$visitas,time()+3600*24);

            setcookie("fe[$visitas]",$fecha,time()+3600*24);

            echo "<h2>Bienvenido, nos ha visitado $visitas veces</h2><br>";

            foreach($_COOKIE['fe'] as $elemento){
                echo "<p> fecha: $elemento </p>";
            }

        }

    ?>


</body>
</html>