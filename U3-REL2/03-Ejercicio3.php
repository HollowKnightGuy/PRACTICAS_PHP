<?php

function comprobador($param){
    if (gettype($param) == "string"){
        if (strlen($param) == 0){
            echo "Este es el relleno porque estaba vacía";
        } else{
            echo strtoupper($param);
        }
    } else{
        echo $param." no es una cadena de caracteres";
    }

}

comprobador(4);