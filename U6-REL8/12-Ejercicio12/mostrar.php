<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['borrar'])){
        $mensaje = "Preferencias borradas con exito";
        unset($_SESSION['idiomas']);   
        unset($_SESSION['perfil']);   
        unset($_SESSION['zonahoraria']);   

    }
}
?>
 <!DOCTYPE html>
 <html lang="es">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <?php if(isset($_POST['borrar'])){echo $mensaje;}?>
 <fieldset>
        <legend>Preferencias</legend>
        <label for="idiomas">Idiomas</label>
        <?php if(isset($_SESSION['idiomas'])){echo $_SESSION['idiomas'];}?>
        <br>
        <label for="perfil">Perfil Publico</label>
        <?php if(isset($_SESSION['perfil'])){echo $_SESSION['perfil'];}?>
        <br>
        <label for="zonahoraria">Zona Horaria</label>
        <?php if(isset($_SESSION['zonahoraria'])){echo $_SESSION['zonahoraria'];}?>
        <br>
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <input type="submit" name="borrar" value="Borrar Preferencias">
        </form>
        <a href="index.php">Volver</a>
    </fieldset>
 </body>
 </html>