<?php

$dado1 = rand(1,6);
$dado2 = rand(1,6);

print("<img src=\"./dados/$dado1.png\" width=\"140px\" height=\"140px\">");

print("<img src=\"./dados/$dado2.png\" width=\"140px\" height=\"140px\"><br>");


if ($dado1 == $dado2){
    print "Tenemos una pareja de $dado1";
} else{
    print "<p> No ha sacado pareja. El valor mas alto es ".max($dado1, $dado2);
}
?>