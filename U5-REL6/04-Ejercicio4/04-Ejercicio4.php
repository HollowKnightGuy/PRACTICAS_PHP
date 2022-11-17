<?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(!empty($_POST['altura']) and (!empty($_POST['base']))){
            $altura = $_POST['altura'];
            $base = $_POST['base'];
            $area = ($base * $altura)/2;
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
	<h3>Datos del triangulo</h3>
		
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST"> 
			<label for="base">Base</label>
                        <input type="number" name="base" value = "<?php if(isset($base))echo $base;?>"/>
         
			<label for="altura">Altura</label>
                        <input type="number" name="altura" value = "<?php if(isset($altura))echo $altura;?>"/>
                       
                        <label for="resultado">Resultado</label>
                        <input type="number" name="resultado" value = "<?php if(isset($area))echo $area;?>" disabled/>

			<input type="submit" value="Calcular" />
		</form>			
		

		
	</body>
</html>