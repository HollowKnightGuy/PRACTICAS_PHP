
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creacion y Destruccion</title>
</head>
<body>
    <h1 style="text-align: center;">CREACION Y DESTRUNCCION COOKIE</h1>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
        <label for="nombre">Nombre de usuario:</label>
        <input type="text" name="nombre">
<br><br>
        <label for="duracion">Duración cookie entre 1 y 60 segundos:</label>
        <input type="number" max="60" min="1" name="duracion" >
<br><br>
        <input type="submit" name="crear" value="Crear Cookie">
        <input type="submit" name="borrar" value="Borrar Cookie"> 
        <input type="submit" name="actualizar" value="Actualizar Página">
    </form>
    
<?php
    if(isset($_POST["crear"])){
        echo "<p>hola</p>";
        if(isset($_POST["nombre"]) && isset($_POST["duracion"])){
            setcookie("usuario", $_POST["nombre"], time() + $_POST["duracion"]);
            echo "<p>Hola, ".$_POST['nombre'].". Bienvenid@ a nuestra página web</p>";
            echo "<p>La cookie <b>usuario</b> tiene el valor de <b>".$_POST['nombre']."</b></p>";
        }

    }

    if(isset($_POST["borrar"])){
        if(isset($_COOKIE["usuario"])){
            setcookie("usuario", "", time() - 61);
        }
        else{
            echo "<p>No hay ninguna <b>cookie</b> creada</p>";
        }

    }

    if(isset($_POST["actualizar"])){
        header("Location:index.php");
    }
?>
</body>
</html>