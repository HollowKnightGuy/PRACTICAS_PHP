<?php

    function comprobar_usuario($nombre, $clave){
        if ($nombre === "usuario" and $clave === "1234"){
            $usu['nombre'] = "usuario";
            $usu['rol'] = 0;
            return $usu;
        } elseif ($nombre === "admin" and $clave === "1234"){
            $usu['nombre'] = "admin";
            $usu['rol'] = 1;
            return $usu;
        }else return false;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $usu = comprobar_usuario($_POST['usuario'], $_POST['clave']);
        if($usu == false){
            $err = true;
            $usuario = $_POST['usuario'];
        } else{
            session_start();
            $_SESSION['usuario'] = $_POST['usuario'];
            header("Location: principal.php");
        }
    }
    
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php if (isset($_GET['redirigido'])){
        echo "<p> Haga login para continuar </p>";
    } ?>
    <?php if (isset($err) and $err == true){
        echo "<p> revise usuario y contraseña </p>";
    } ?>

    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Usuario
        <input type="text" value = "<?php if(isset($usuario)) echo $usuario ?>" name="usuario" id="usuario">
        <input type="password" name="clave" id="clave">
        <input type="submit" name="" id="">
    </form>
</body>
</html>