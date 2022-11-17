<?php
echo "<table border=1>";
echo "<tr>";
$contador = 0;
foreach($_SERVER as $value){
    echo "<td>".array_search($value, $_SERVER)."</td>";
    echo "<td>".$value."</td>";
    
    echo "</tr>";

}

echo "</table>";