<?php

    if ($_COOKIE["politica"]){
        unset($_COOKIE['politica']);
        setcookie("politica", "", time() - 100);
    }
    header('Location:index.php')
?>