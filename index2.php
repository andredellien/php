<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario GET</title>
</head>
<body>
    <h1>Envío de datos mediante GET</h1>
    <form action="index2.php" method="GET">
        <label for="universidad">Universidad:</label>
        <input type="text" name="universidad">
        <label for="carrera">Carrera:</label>
        <input type="text" name="carrera">
        <label for="semestre">Semestre:</label>
        <input type="text" name="semestre">
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $universidad = isset($_GET["universidad"]) ? $_GET["universidad"] : "";
        $carrera = isset($_GET["carrera"]) ? $_GET["carrera"] : "";
        $semestre = isset($_GET["semestre"]) ? $_GET["semestre"] : "";

        if (empty($universidad) || empty($carrera) || empty($semestre)) {
            echo "Coloque los datos por favor.<br>";
        } else {
            echo "Universidad: " . $universidad . "<br>";
            echo "Carrera: " . $carrera . "<br>";
            echo "Semestre: " . $semestre . "<br>";
        }
    }
    ?>
</body>
</html>
