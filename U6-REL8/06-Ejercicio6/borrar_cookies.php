<?php
if (isset($_SERVER['HTTP_COOKIE'])){
    $cookies = explode(';',$_SERVER['HTTP_COOKIE']);
    foreach($cookies as $cookie){
        $partes = explode('=',$cookie);
        $nombre = trim($partes[0]);
        setcookie($nombre, '', time()-100);
    }
}

    header('Location:index.php')
?>