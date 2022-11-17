<?php

$a = 1;
$b = -5;
$c = 6;

$discriminante = (($b * $b) - (4 * $a *$c));
if ($a == 0){
    echo "ERROR: No se puede dividir por 0 <br>";
    $x1 = "-";
    $x2 = "-";

} else{
    $x1 = (-$b + sqrt($discriminante)/(2*$a));
    $x2 = (-$b - sqrt($discriminante)/(2*$a));
}

echo "x1 = $x1 <br>";
echo "x2 = $x2";

?>