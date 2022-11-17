<?php

$numero = 12;

function primo($num)
{
    if(!is_numeric($num))
        return false;
    for ($i = 2; $i < $num; $i++) {

        if (($num % $i) == 0) {
            return false;

        }else{
            return true;
        }
    }
}

if (primo($numero)){
    echo "El numero ".$numero." es primo";
} else{
    echo "El numero ".$numero." no es primo";
}