<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brisca</title>
</head>
<body>
    <h1>Brisca</h1>
    
    <h3>Tus cartas:</h3>

    <?php 
        include("juego.php");

    ?>

    <h3>Cartas de la baza:</h3>

    <?php mostrarCartas($cartas_baza); ?>

    <h3>Puntos Conseguidos: </h3>

    <?php echo $puntos_baza." Puntos."; ?>

</body>
</html>