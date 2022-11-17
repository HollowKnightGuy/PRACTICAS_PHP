<?php
function sacarFecha(){
    setlocale(LC_TIME,"Spanish");
    $dia = strftime("%A %d de %B del %Y ");
    $hora = date("H:i:s");
    $fecha = $dia." ".$hora;
    return $fecha;
}


?>