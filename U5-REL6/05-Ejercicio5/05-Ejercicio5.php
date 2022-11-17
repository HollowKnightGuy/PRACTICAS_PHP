<?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(!empty($_POST['nombre']) and (!empty($_POST['email'])) and (!empty($_POST['telefono']))){
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $telefono = $_POST['telefono'];
            $texto = "! Buenos días $nombre ¡ <br> Te voy a enviar spam a $email y te llamaré d emadrugada a $telefono";
            }
        }
        ?>
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Area triangulo</title>
	</head>
	<body>
	<h3>Tus Datos</h3>
		
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST"> 
			<label for="nombre">Nombre</label>
                        <input type="text" name="nombre" value = "<?php if(isset($nombre))echo $nombre;?>"/>
         
			<label for="email">E-mail</label>
                        <input type="text" name="email" value = "<?php if(isset($email))echo $email;?>"/>
            
            <label for="telefono">Telefono</label>
                        <input type="number" name="telefono" value = "<?php if(isset($telefono))echo $telefono;?>"/>
                       
                        
			<input type="submit" value="Aceptar" />
		</form>			
                <p><?php if(isset($texto))echo $texto;?></p>
		

		
	</body>
</html>