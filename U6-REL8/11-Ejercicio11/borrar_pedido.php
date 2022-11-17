<?php
    session_start();
    if(isset($_SESSION["productosEnCesta"])){
        $_SESSION["productosEnCesta"] = [];
    }
    header("Location:carrito.php")
?>