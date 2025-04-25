<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $direccion = $_POST["direccion"];
        $telefono = $_POST["telefono"];

        if (empty($nombre) || empty($direccion) || empty($telefono)) {
            echo "Coloque los datos por favor.<br>";
        } else {
            echo "Nombre: " . $nombre . "<br>";
            echo "Dirección: " . $direccion . "<br>";
            echo "Teléfono: " . $telefono . "<br>";
        }
    }
    ?>