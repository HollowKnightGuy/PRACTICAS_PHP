<?php

    if ($_COOKIE["visitas"]){
        unset($_COOKIE['visitas']);
        setcookie("visitas", "", time() - 100);
    }
    header('Location:index.php')
?>