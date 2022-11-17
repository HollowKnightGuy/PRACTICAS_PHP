<?php

    $peliculas = ["Superman", "Flash", "Thor", "Iron man", "Capitan america", "Viuda negra", "Los vengadores", "Black panther", "Los vengadores 2"];

    $colores = ["red", "green", "black", "yellow", "purple"];

    $contador = 1;
    foreach ($peliculas as $pelicula){
        echo "Pelicula $contador: $pelicula <br>";
        $contador += 1;
    }

    echo "<br> <table border=1>";
    echo "<tr>";
    $contador = 1;
    foreach($peliculas as $pelicula){
        echo "<td>"."Pelicula $contador: "."</td>";
        $color = $colores[array_search($colores[array_rand($colores)], $colores)];
        echo "<td style='color:$color'>".$pelicula."</td>";
        echo "</tr>";
        $contador += 1;
}

echo "</table>";