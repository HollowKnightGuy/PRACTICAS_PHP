<?php
    $medias = [];

    function crearNotas(){
        $notas = [];
        $media = 0;
        for ($i = 0; $i < 3; $i++){
            $nota = rand(1,11);
            $notas[$i] = $nota;
            $media += $nota;
        }
        
        $media /= 3;
        $notas[3] = round($media, 2);
        return $notas;
    }   


    function NotasEnTabla(){
        if (!isset($medias)){
            
        }
        $asignatura = crearNotas(); 
        array_push($GLOBALS['medias'], $asignatura[3]);
        echo "<td>$asignatura[0]</td><td>$asignatura[1]</td><td>$asignatura[2]</td><td>$asignatura[3]</td>";
    }

    function mediaFinal(){
        return round(array_sum($GLOBALS['medias'])/5, 2);
    }
?>