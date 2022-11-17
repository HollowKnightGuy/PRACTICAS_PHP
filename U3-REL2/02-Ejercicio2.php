<?php

function sumar($num1, $num2){
    return $num1 + $num2;
}

function restar($num1, $num2){
    return $num1 - $num2;
}

function multiplicar($num1, $num2){
    return $num1 * $num2;
}

function dividir($num1, $num2){
    if ($num2 == 0){
        throw new Exception('No se puede dividir por 0');
    }
    return $num1 / $num2;
}

function calculador($param1, $param2, $op){
    if ($op == "sumar"){
        echo sumar($param1, $param2);
    }   
    
    elseif ($op == "restar"){
        echo restar($param1, $param2);
    }  

    elseif ($op == "multiplicar"){
        echo multiplicar($param1, $param2);
    }  

    elseif ($op == "dividir"){
        try{
            $division = dividir($param1,$param2);
            echo 'El resultado es '.$division.'<br>';
        } catch(Exception $e){
            echo "Excepción: ".$e -> getMessage().'<br>';
        }
    }  
}

calculador(3,123985734986723495,"dividir");

