<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/Escudo_UD.png">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Primer Punto</title>
</head>
<body>
    <h1>Primer punto</h1>
    <form action="server.php" method="post">
        <input type="number" name="numero1">
        <input type="number" name="numero2">
        <select name="operacion">
            <option value="suma"> Sumar </option>
            <option value="resta"> Restar </option>
            <option value="multiplicacion"> Multiplicar </option>
            <option value="division"> Dividir </option>
        </select>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>
