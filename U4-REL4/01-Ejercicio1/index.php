<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
</head>
<body>
    <?php
        include("notas.php")
    ?>

    <h1>Boletín de notas</h1>

    <table border = "1">
        <tr>
            <td>Asignatura</td>
            <td>Trimestre 1</td>
            <td>Trimestre 2</td>
            <td>Trimestre 3</td>
            <td>Media</td>
        </tr>
        <tr>
            <td>Matemáticas</td>
            <?= NotasEnTabla()?>
        </tr>
        <tr>
            <td>Lengua</td>
            <?= NotasEnTabla()?>
        </tr>
        <tr>
            <td>Física</td>
            <?= NotasEnTabla()?>
        </tr>
        <tr>
            <td>Latín</td>
            <?= NotasEnTabla()?>
        </tr>
        <tr>
            <td>Inglés</td>
            <?= NotasEnTabla()?>
        </tr>
    </table>

    <h2>La media total es <?= mediaFinal() ?></h2>
</body>
</html>