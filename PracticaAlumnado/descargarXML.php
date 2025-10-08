<?php


    ////////COPIA DEL RETO1 DE 1ªDAW3
    // Conexión a la base de datos
    $conn = mysqli_connect("localhost", "root", "", "practica_alumnado");

    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    // Consulta de todos los alumnos
    $query = "SELECT * FROM alumno";
    $result = mysqli_query($conn, $query);

    // Crear XML con nodo raíz <alumnos>
    $xml = new SimpleXMLElement('<alumnos></alumnos>');

    // Recorrer resultados y añadir al XML
    while($row = mysqli_fetch_assoc($result)) {
        $alumno = $xml->addChild('alumno');

        $alumno->addChild('nombre', htmlspecialchars($row['nombre']));
        $alumno->addChild('apellidos', htmlspecialchars($row['apellidos']));
        $alumno->addChild('fecha_nacimiento', htmlspecialchars($row['fecha_nacimiento']));
        $alumno->addChild('curso', htmlspecialchars($row['curso']));
        $alumno->addChild('email', htmlspecialchars($row['email']));
        $alumno->addChild('contrasena', htmlspecialchars($row['contrasena']));
    }

    // Cerrar conexión
    mysqli_close($conn);

    // Cabeceras para descarga
    Header('Content-type: text/xml');
    Header('Content-Disposition: attachment; filename="alumnos.xml"');

    // Mostrar XML
    echo $xml->asXML();
?>
