<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del Usuario</title>
    <link rel="stylesheet" href="css_3.css">
</head>
<body>
    <div class="container">
        <h1>Datos del Usuario</h1>

        <?php
        if (isset($_GET['nombre']) && isset($_GET['apellido']) && isset($_GET['cedula'])) {
            $nombre = $_GET['nombre'];
            $apellido = $_GET['apellido'];
            $cedula = $_GET['cedula'];

            echo "<p>Nombre: $nombre</p>";
            echo "<p>Apellido: $apellido</p>";
            echo "<p>Cédula: $cedula</p>";
        } else {
            echo "<p>No se recibieron datos.</p>";
        }
        ?>
    </div>
</body>
</html>
