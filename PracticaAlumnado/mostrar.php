<?php
    include 'conexion.php';

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    $sql = "SELECT * FROM alumno";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<table border='1'><tr>";

        // Mostrar nombres de columnas
        while ($columna = $resultado->fetch_field()) {
            echo "<th>" . $columna->name . "</th>";
        }
        echo "</tr>";

        // Mostrar filas
        while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>";
            foreach ($fila as $valor) {
                echo "<td>" . $valor . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        echo '<a href="eleccion.html"><button id="boton">Volver</button></a>'; 
    } else {
        echo "No hay datos disponibles.";
    }

    $conexion->close();
?>