<?php	
echo "<table border = 1>";
echo "<tr>";
//CREAMOS LA FILA SUPERIOR
	for ($tabla=1; $tabla<=10; $tabla++) { 
		echo "<td>Tabla del $tabla </td>";
	}                
	echo "</tr>";

echo "<tr>";
//CREAMOS EL RESTO DE LA TABLA
	for ( $num1 = 1; $num1 <= 10 ; $num1++) { 
		for ($num2 = 01; $num2 <= 10 ; $num2++) { 
			echo "<td>$num2  x $num1 =";
			echo ($num2 * $num1);
			echo "</td>";
		}
 	echo "</tr>";
}
  echo "</table>";
?>