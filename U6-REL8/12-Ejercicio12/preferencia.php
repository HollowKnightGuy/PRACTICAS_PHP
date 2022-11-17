<?php
    $info = "";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        session_start();;
        $_SESSION['usuario']['idioma'] = [$_POST['idioma']];
        $_SESSION['usuario']['pp'] = [$_POST['pp']];
        $_SESSION['usuario']['zonah'] = [$_POST['zonah']];
        $info = "Preferencias guardadas";
        
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preferencias</title>
</head>
<body>
    <fieldset>
        <legend>Preferencias</legend>
        <p><?php echo $info ?></p>
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
            <label for="idioma">Idioma: </label>
            <select name="idioma" id="">
                <option value="espaniol">Español</option>
                <option value="ingles">Inglés</option>
            </select>
            <br>
            <label for="pp">Perfil Público</label>
            <select name="pp" id="">
                <option value="si">Sí</option>
                <option value="no">No</option>
            </select>
            <br>
            <label for="zonah">Zona horaria</label>
            <select name="zonah" id="">
                <option value="gmt-1">GMT-1</option>
                <option value="gmt-2">GMT-2</option>
                <option value="gmt">GMT</option>
                <option value="gmt+1">GMT+1</option>
                <option value="gmt+2">GMT+2</option>
            </select>
            <br>
            <input type="submit" name="establecer" value="Establecer preferencias">
        </form>
        <br>
        <a href="mostrar.php">Mostrar Preferencias</a>
    </fieldset>
</body>
</html>