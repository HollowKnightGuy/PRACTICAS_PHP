<?php
    if(isset($_POST["aniadir"])){
        session_start();
        if(isset($_POST["producto"])){
            if(isset($_SESSION["productosEnCesta"][$_POST["producto"]])){
                $_SESSION["productosEnCesta"][$_POST["producto"]] += $_POST["cantidad"];
            } else{
                $_SESSION["productosEnCesta"][$_POST["producto"]] = $_POST["cantidad"];
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprar</title>
</head>
<body>
    <h1>Carrito de la compra</h1>
    <h2>Introduce los productos que deseas comprar</h2>
    
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
        <label for="producto">Dime el producto</label><input type="text" name="producto" required>
        <br>
        <label for="cantidad">Cuantas unidades</label>
        <input type="number" name="cantidad" min="1" value="1">
        <br>
        <input type="submit" name="aniadir" value="Añadir a la cesta">
        <br>
        <button><a href="carrito.php">Comprar</a></button>
    </form>

</body>
</html>