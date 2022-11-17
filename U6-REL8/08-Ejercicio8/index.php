<?php
session_start();
if (!isset($_SESSION['contador'])){
    $_SESSION['contador'] = 1;
    $frase = " por primera vez";
} else{
    $_SESSION['contador']++;
    $frase = ", has visitado nuestra web ".$_SESSION['contador']." veces";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>
<body>
    <br>
    <h2>Hola <?= $frase ?></h2>
    <a href="index.php">Volver a visitar la web</a>
</body>
</html>