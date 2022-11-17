<?php
// Si han aceptado la política
    if(isset($_REQUEST['politica-cookies'])) {
        $caducidad = time() + (60 * 60 * 24 * 365);
        setcookie('politica', '1', $caducidad);
    }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="cookies-box">
        <?php if (!isset($_REQUEST['politica-cookies']) && !isset($_COOKIE['politica'])): ?>
            <!-- Mensaje de cookies -->
            <div class="cookies">
                <h2>Cookies</h2>
                <p>¿Aceptas nuestras cookies?</p>
                <a href="?politica-cookies=true" class="cookies--accept">Aceptar</a>
            </div>
        <?php endif; ?>
    </div>
    <a href="./borrar_cookies.php" class="delete-cookies">Borrar Cookie</a>
</body>
</html>