
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
</head>
<body>
    <h1>El contenido de la cesta de la compra es</h1>
    <a href="borrar_pedido.php">Borrar Pedido</a>
    <br>
    <a href="comprar.php">Comprar Más</a>
    <table>
        <tr>
            <td>Articulo</td>
            <td>Cantidad</td>
        </tr>
    </table>
    <?php
        session_start();
        if(isset($_SESSION["productosEnCesta"])){
            foreach($_SESSION["productosEnCesta"] as $producto => $cantidad){
                echo $producto." => ".$cantidad."<br>";
            }
        }

    ?>
</body>
</html>