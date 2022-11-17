<?php

setlocale(LC_TIME, 'spanish');
function fechaActual(){
    return strftime("%A ,%d de %B del %Y");
}

echo fechaActual();
?>