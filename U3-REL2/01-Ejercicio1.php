<?php
 
function factorial($num){
    if ($num < 0){

        throw new Exception('El valor tiene que se mayor o igual a 0');
        
    } else{

        $resultado = 1;
        for ($num; $num > 0; $num--){
            $resultado *= $num;
        }
        return $resultado;
    }
}

try{
    $factorial = factorial(5);
    echo "El resultado del factorial es $factorial <br>";

} catch (Exception $e){
    echo "Excepción: ".$e -> getMessage()."<br>";
} finally{
    echo "<br> Programa finalizado";
}