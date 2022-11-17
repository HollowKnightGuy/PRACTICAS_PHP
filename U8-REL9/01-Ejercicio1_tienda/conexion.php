<?php

$servername = "localhost"; 
$database = "mistiendas"; 
$username = "admin"; 
$password = "admin123"; 
try {
    $conexion = new mysqli($servername, $username, $password, $database);
   
} catch (Exception $e){
    echo "Error con la base de datos: ". $e -> getMessage();

}

?>