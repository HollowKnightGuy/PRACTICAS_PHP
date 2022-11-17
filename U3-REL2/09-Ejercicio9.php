<?php
    $contraseña = '23aaaaaAAAA+';
    function validar_contraseña($contraseña){

        $error_contraseña='';
        if(strlen($contraseña) < 6){
           $error_contraseña = "La contraseña debe tener al menos 6 caracteres";
        }
        if(strlen($contraseña) > 15){
           $error_contraseña = "La contraseña no puede tener más de 16 caracteres";
        }
        if (!preg_match('`[a-z]`',$contraseña)){
           $error_contraseña = "La contraseña debe tener al menos una letra minúscula";
        }
        if (!preg_match('`[A-Z]`',$contraseña)){
           $error_contraseña = "La contraseña debe tener al menos una letra mayúscula";
        }
        if (!preg_match('`[0-9]`',$contraseña)){
           $error_contraseña = "La contraseña debe tener al menos un caracter numérico";
        }
        if (!preg_match('`[!-/]`',$contraseña)){
            $error_contraseña = "La contraseña debe tener al menos un caracter especial";
         }
        if ($error_contraseña===""){
            echo "PASSWORD VÁLIDO";
        }else{
            echo "PASSWORD NO VÁLIDO debido a --> " . $error_contraseña;
        }
     }
     

    echo validar_contraseña($contraseña);




?>
