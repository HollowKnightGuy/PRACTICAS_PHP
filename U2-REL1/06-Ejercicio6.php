<?php

$pais = "España";
$habitantes = 23420340;
$continente = "Europa";

echo "<h1>Mostrando los tipos de datos de las variables";
echo "$pais Es un pais de $continente con $habitantes habitantes";

echo "La variable pais es de tipo ".gettype($pais)."<br>";
echo "La variable continente es de tipo ".gettype($continente)."<br>";
echo "La variable habitantes es de tipo ".gettype($habitantes);