<?php

function maxdivisor($numero1, $numero2){
    $mayor = 1;
    $maximo = max($numero1, $numero2);
    for ($i = 1; $i <= $maximo; $i++){
        if ($numero1 % $i == 0 && $numero2 % $i == 0){
            if($i > $mayor){
                $mayor = $i;
            }
        }
    }return $mayor;
}

echo "El MCD es ".maxdivisor(10,20);