<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario POST</title>
</head>
<body>
    <h1>Envío de datos mediante POST</h1>
    <form action="procesar.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre">
        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion">
        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
