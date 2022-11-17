<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="post" action="#">
        <label for="dinero">Euros</label><input type="number" name="dinero" required>
        <input type="submit" name="convertir">
    </form>
    <?php

    $valor = $_POST['dinero'];

    $resultado = $valor * 0.96;

    echo "$valor Euros(€) = $resultado Dólares($)";

    ?>
</body>
</html>



