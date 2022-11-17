<?php
$posi = 0;
$array[] = rand(0,100);

while ($posi < 120){
    array_push($array, rand(0, 100));
    $posi += 1;

}

foreach($array as $valor){
    echo $valor.", ";
}
