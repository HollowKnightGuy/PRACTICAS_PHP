<?php

$datos = array(
    "prof1" => array(
        "nombre" => "Belén",
        "apellido" => "Callejón Prieto",
        "nregistro" => rand(1000,2000),
        "fnacimiento" => "1982-11-01"
    ),

    "prof2" => array(
        "nombre" => "Carlos",
        "apellido" => "Pérez Pérez",
        "nregistro" => rand(1000,2000),
        "fnacimiento" => "1991-04-02"
    ),

    "prof3" => array(
        "nombre" => "Blas",
        "apellido" => "Rodríguez Ortiz",
        "nregistro" => rand(1000,2000),
        "fnacimiento" => "1945-11-02"
    )
    );

$mostrar = function($array){
    foreach($array as $valor){
            echo $valor["nregistro"]."<br>";
    }
};


$mostrar($datos);

$mostrarMayores = function($array){
    foreach($array as $valor){
        if (date("Y" , strtotime($valor['fnacimiento'])) > 1990){
            echo ($valor['nombre']." ".$valor['apellido']." nació despues de 1990 <br>");
        } else{
            echo ($valor['nombre']." ".$valor['apellido']." nació antes de 1990 <br>");
        }
}
};

$mostrarMayores($datos);

