
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inmobiliaria</title>
    <style>
        label{
            display: inline-block;
            min-width: 250px;
        }

        input[type="submit"]{
            padding: 10px;

        }

        .error{
            color: red;
            font-style: italic;
        }
    </style>
</head>
<body>
    <h2>Insercion de vivienda</h2>
    <p>Introduzca los datos de la vivienda:</p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" enctype="multipart/form-data">
        <?php
            include("validar.php");
            
        ?>

        <label for="vivienda" >Tipo de vivienda: </label>
        <select  name="vivienda" id="">
            <option value="Piso">Piso</option>
            <option value="Adosado">Adosado</option>
            <option value="Chalet">Chalet</option>
            <option value="Casa">Casa</option>
        </select>
<br><br>
        <label for="zona">Zona: </label>
        <select  name="zona" id="">
            <option value="Centro">Centro</option>
            <option value="Zaidín">Zaidín</option>
            <option value="Chana">Chana</option>
            <option value="Albaicín">Albaicín</option>
            <option value="Sacromonte">Sacromonte</option>
            <option value="Realejo">Realejo</option>
        </select>
<br><br>
        <label for="dirección" >Dirección: </label>
        <input  type="text" name="direccion">
        <span class="error"><?php echo $direcErr ?></span>
<br><br>
        <label for="ndormitorios">Número de dormitorios: </label>
        <input type="radio" name="ndormitorios"  value="1">1
        <input type="radio" name="ndormitorios"  value="2">2
        <input type="radio" name="ndormitorios" checked  value="3">3
        <input type="radio" name="ndormitorios"  value="4">4
        <input type="radio" name="ndormitorios"  value="5">5
<br><br>
        <label for="precio">Precio</label>
        <input  type="text" name="precio"> €
        <span class="error"><?php echo $precioErr ?></span>
        <span class="error"><?php echo $numericErr1 ?></span>
<br><br>
        <label for="tamanio">tamaño</label>
        <input  type="text" name="tamanio"> m<sup>2</sup>
        <span class="error"><?php echo $tamanioErr ?></span>
        <span class="error"><?php echo $numericErr2 ?></span>
<br><br>
        <label for="extras">Extras (marque los que procedan): </label>
        <input type="checkbox" name="extras[]"  value="Piscina" default="">Piscina
        <input type="checkbox" name="extras[]"  value="Jardín" default="">Jardín
        <input type="checkbox" name="extras[]"  value="Garaje" default="">Garaje
<br><br>
        <label for="foto">Foto: </label>
        <input  type="file" name="foto">
        <span class="error"><?php echo $fotoErr ?></span>
<br><br>
        <label for="observaciones">Observaciones: </label>
        <textarea name="observaciones" rows="8" cols="40"></textarea>
<br><br>
        <input  type="submit" name="submit" value="Enviar">
    </form>
</body>
</html>