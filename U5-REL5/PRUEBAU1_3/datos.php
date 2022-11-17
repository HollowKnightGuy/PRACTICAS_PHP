<?php
    require('./validar.php');
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
?>