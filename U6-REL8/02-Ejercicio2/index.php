<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>
<body>
    <p>Seleccione el idioma</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="esp">Español</label>
        <input type="radio" name="esp">
        <label for="eng">Inglés</label>
        <input type="radio" name="eng">
        <br><br>
        <input type="submit" value="Cambiar idioma">
    </form>
    <hr>
    <?php
    if (isset($_POST["esp"]) or isset($_POST["eng"])){
        if (isset ($_POST["esp"])){
            setcookie("idioma", "esp", time() + 3600 * 24);
            echo "<h2> Hola </h2>";
        }
        else if (isset ($_POST["eng"])){
            setcookie("idioma", "eng", time() + 3600 * 24);
            echo "<h2> Hello </h2>";
        }
    }else{
        echo "<p style='color: red;'> No ha seleccionado ninguna opcion </p>";
        echo "<h2> Hola </h2>";
    }
        
    ?>
</body>
</html>