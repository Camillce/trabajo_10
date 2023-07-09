<?php

if (isset($_POST['submit'])) {
    $edad = $_POST['edad'];
    $mensaje = '';

    if ($edad < 18) {
        $mensaje = 'No es mayor de edad';
    } else {
        $mensaje = 'Es mayor de edad';
    }

    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Verificar Edad</title>
        <link rel="stylesheet" href="css_2.css">
    </head>
    <body>
        <div class="container">
            <h1>Verificar Edad</h1>
            <form action="verificar_edad.php" method="post">
                <div class="form-group">
                    <label for="edad">Edad:</label>
                    <input type="text" name="edad" id="edad" required>
                </div>
                <button class="btn-submit" type="submit" name="submit">Verificar</button>
            </form>
            <div class="result">' . $mensaje . '</div>
        </div>
    </body>
    </html>';
}
