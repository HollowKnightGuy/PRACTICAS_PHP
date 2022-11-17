<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    if ($_POST['usuario'] == 'usuario' and $_POST['contraseña'] == '1234'){
        header('Location: correcto.html');
    }else{
        $err = true;
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(isset($err)){
        echo "<p> Revise usuario y contraseña</p>";
    }?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario" value="<?php if(isset($usuario))echo $usuario;?>">
        <label for="contraseña">Clave</label>
        <input type="password" name="contraseña" id="contraseña">

        <input type="submit">   
</body>
</html>