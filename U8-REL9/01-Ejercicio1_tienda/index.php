<?php

    require_once("conexion.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiendas</title>
</head>
<body>
    <h1>Ejercicio: Conjunto de resultados MySQLi</h1>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
        <label for="productos">Producto: </label>
        <select name="productos">
            <?php
                $sql = "SELECT cod, nombre_corto FROM productos";
                $productos = $conexion -> query($sql);
                
                while ($row = $productos -> fetch_assoc()){                   
                    echo "<option value = ".$row['cod'].">".$row['nombre_corto']."</option>";
                }
            ?> 
        </select>
        <input type="submit" name="mostrar" id="">
    <form>
    <h2>Stock del producto en las tiendas</h2>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($_POST["productos"])){
                $producto = $_POST["productos"];
                $sel = "SELECT tiendas.nombre, stock.unidades FROM tiendas INNER JOIN stock ON tiendas.cod = stock.tienda WHERE stock.producto = '$producto'";
                $stock = $conexion -> query($sel);

                while ($row = $stock -> fetch_assoc()){
                    echo "<p>Tienda ".$row["nombre"]." : ".$row["unidades"]." unidades.";
                }
                echo "</p>";
            }
        }
    ?>
</body>
</html>