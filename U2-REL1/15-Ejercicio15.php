<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        th, td {
            padding: 1px 8px;
        }
        table {
            border: 1;
        }
    </style>
</head>
<body>
    
    <h1>Tabla 20 primeros n&uacute;meros en diferentes bases</h1>

    <table>
        <tr>
            <th>Decimal</th>
            <th>Binario</th>
            <th>Octal</th>
            <th>Hexadecimal</th>
        </tr>

    <?php

    for ($i = 00; $i <= 19; $i++) {
        
        echo "<tr><td>";
        printf("%'02s",$i);
        echo "</td><td>";
        printf("%'06b",$i);
        echo "</td><td>";
        printf("%'02o",$i);
        echo "</td><td>";
        printf("%'02X",$i);
        echo "</td></tr>";
    };
    
    ?>
    </table>


</body>
</html>