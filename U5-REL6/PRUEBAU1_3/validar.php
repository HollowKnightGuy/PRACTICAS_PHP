<?php

$direcErr = $precioErr = $tamanioErr = $fotoErr = $numericErr1 = $numericErr2 = "";

if(isset($_POST['submit'])){




    $vivienda      = $_POST['vivienda'];
    $zona          = $_POST['zona'];
    $direccion     = $_POST['direccion'];
    $precio        = $_POST['precio'];
    $tamanio       = $_POST['tamanio'];
    $foto          = $_FILES['foto'];
    $observaciones = $_POST['observaciones'];
    $ndormitorios  = $_POST['ndormitorios'];
    $validacion    = 6;
    if(empty($direccion)){
        $direcErr = "* Falta la dirección";
    } else{
        $validacion += 1;
    }

    if(empty($precio)){
        $precioErr = "* Falta el precio";
    } elseif (!is_numeric($precio)){
        $numericErr1 = "* Debe ser un valor numérico";
    } else{

        $validacion += 1;
    }

 
    if(empty($tamanio)){
        $tamanioErr = "* Falta el tamaño";
    }  elseif (!is_numeric($tamanio)){
        $numericErr2 = "* Debe ser un valor numérico";
    } else{

        $validacion += 1;
    }


    if(isset($_POST['extras'])){
        $extras = $_POST['extras'];
    } else{
        $extras = [];
    }

    if(isset($foto)){
        $tam = $foto["size"];
        if (is_uploaded_file($_FILES["foto"]["tmp_name"])){
            if ($tam > 100 * 1024){
                $fotoErr = "* La foto es demasiado grande. Máximo 100KB";
            }else{
                session_start();
                
                $nombreDirectorio = "images/";
                $nombreFichero = $_FILES["foto"]["name"];
        
                $nombreCompleto = $nombreDirectorio.$nombreFichero;
                $_SESSION['foto'] = $nombreCompleto ;
                if(is_file($nombreCompleto)){
                    $idUnico = time();
                    $nombreFichero = $idUnico."-".$nombreFichero;
                    $_SESSION['foto'] = $nombreDirectorio.$nombreFichero;
                    move_uploaded_file($foto["tmp_name"],$nombreDirectorio.$nombreFichero);
                }else{
                    move_uploaded_file($foto["tmp_name"],$nombreCompleto);
                    
                }
            }
        }
    }




    if($validacion == 9){
        $extras_pos = count($extras);
        $extras_str = "";
        if($extras_pos > 0){ 
            foreach($extras as $extra){
                $extras_str = $extras_str." ".$extra." ";
            }
        }
        switch($zona){
            case "Centro":
                if ($tamanio < 100){
                    $porcentaje = 30;
                }else{
                    $porcentaje =35;
                }
            case "Zaidín":
                if ($tamanio < 100){
                    $porcentaje = 25;
                }else{
                    $porcentaje =28;
                }
            case "Chana":
                if ($tamanio < 100){
                    $porcentaje = 22;
                }else{
                    $porcentaje =25;
                }
            case "Albaicín":
                if ($tamanio < 100){
                    $porcentaje = 20;
                }else{
                    $porcentaje =35;
                }
            case "Sacromonte":
                if ($tamanio < 100){
                    $porcentaje = 22;
                }else{
                    $porcentaje =25;
                }
            case "Realejo":
                if ($tamanio < 100){
                    $porcentaje = 25;
                }else{
                    $porcentaje =28;
                }
        }
        $beneficio = $precio * $porcentaje / 100;
        $precio_final = $precio + $beneficio;

        
        $datos = "
        <h3>Datos subidos correctamente</h3>
        <br><ul>
            <li>Tipo de vivienda: $vivienda</li>
            <li>Zona: $zona</li>
            <li>Direccion: $direccion</li>
            <li>Numero de dormitorios: $ndormitorios</li>
            <li>Precio: $precio €</li>
            <li>Precio Final: $precio_final €</li>
            <li>Beneficio: $beneficio €</li>
            <li>Tamaño: $tamanio m<sup>2</sup></li>
            <li>Extras: $extras_str</li>
            <li>Foto: ".$foto['name']."</li>
            <li>Observaciones: $observaciones</li>
            <a href='imagen.php'>[Ver imagen Enviada]</a>
        </ul>
        ";
        echo "<p>$datos</p>";

        $datos_a_escribir = "
Tipo de vivienda: $vivienda
Zona: $zona
Direccion: $direccion
Numero de dormitorios: $ndormitorios
Precio: $precio €
Precio Final: $precio_final €
Beneficio: $beneficio €
Tamaño: $tamanio m2
Extras: $extras_str
Foto: ".$foto['name']."
Observaciones: $observaciones


        ";

        $archivo = fopen("datos.txt", "a+");
        fwrite($archivo, $datos_a_escribir);
    }
}

?>