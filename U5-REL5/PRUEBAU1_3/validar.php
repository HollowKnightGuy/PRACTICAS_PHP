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
    $errores = array();
    $validacion    = 5;
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
        $extras = array();
    }

    if(isset($foto)){
        $tam = $foto["size"];
        if (is_uploaded_file($_FILES["foto"]["tmp_name"])){
            if ($tam > 100 * 1024){
                $fotoErr = "* La foto es demasiado grande. Máximo 100KB";
            }else{
                
                $nombreDirectorio = "images/";
                $nombreFichero = $_FILES["foto"]["name"];
                
                $nombreCompleto = $nombreDirectorio.$nombreFichero;
                if(is_file($nombreCompleto)){
                    $idUnico = time();
                    $nombreFichero = $idUnico."-".$nombreFichero;
                }
                move_uploaded_file($_FILES["foto"]["tmp_name"],$nombreDirectorio.$nombreFichero);
                $validacion += 1;
                
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
        
        $datos = "
        <h3>Datos subidos correctamente</h3>
        <br><ul>
            <li>Tipo de vivienda: $vivienda</li>
            <li>Zona: $zona</li>
            <li>Direccion: $direccion</li>
            <li>Numero de dormitorios: $ndormitorios</li>
            <li>Precio: $precio €</li>
            <li>Tamaño: $tamanio €</li>
            <li>Extras: $extras_str</li>
            <li>Foto: ".$foto['name']."</li>
            <li>Observaciones: $observaciones</li>
        </ul>
        ";
        echo "<p>$datos</p>";
    }
}

?>