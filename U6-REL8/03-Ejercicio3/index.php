<?php
    if(isset($_POST["color"])){
        $col = $_POST["color"];
        setcookie("color", $col, time() + 100000000);   
    }else{
        if (isset($_COOKIE["color"])){
            $col = $_COOKIE["color"];
        }else{
            $col = "white";
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: <?php echo $col; ?>;
        }
    </style>
</head>
<body>
    <h1>
        Elija un color de fondo
    </h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="color" name="color">
        <input type="submit" value="Cambiar de color">
    </form>
    
</body>
</html>