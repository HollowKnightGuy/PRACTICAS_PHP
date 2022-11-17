<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>
<body>
    <?php
        if (!isset($_COOKIE["visitas"])){
            setcookie("visitas", "1", time() + 3600 * 24);
            echo "<h2>Bienvenido por primera vez</h2>";
        }
        else{
            $visitas = (int) $_COOKIE["visitas"];
            $visitas ++;
            setcookie("visitas", $visitas, time() + 3600 * 24);
            echo "<h2>Has visitado la pagina ".$visitas." veces.</h2>";
        }
        
    ?>
    <a href="borrar_cookies.php">Borrar cookie</a>
</body>
</html>