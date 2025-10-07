<?php

    include 'conexion.php';

    
    $nombre = $_POST['nombre'];
    $apellidos = $_POST ['apellidos'];
    $fecha = $_POST ['fecha_nacimiento'];
    $correo = $_POST['email'];
    $contrasena = $_POST ['contrasena'];


    //COMPROBAR EL CURSO
    if (!isset($_POST['curso'])) {
        echo '
            <script>
                alert("Por favor, selecciona un curso.");
                window.location = "formulario.html";
            </script>
        ';
        exit();
    }
    $curso = $_POST['curso'];

    //Encriptamiento
    //$contrasena = hash('sha512', $contrasena);

    // Verificar si ya hay 25 registros
    $verificar_cantidad = mysqli_query($conexion, "SELECT COUNT(*) AS total FROM alumno");
    $resultado = mysqli_fetch_assoc($verificar_cantidad);

    if ($resultado['total'] >= 25) {
        echo '
            <script>
                alert("El número máximo de registros (25) ya ha sido alcanzado.");
                window.location = "ongiEtorri.html";
            </script>
        ';
        exit();
    }

    ////////////////////////////////////////// Verificar que no se repita el email
    
    $verificar_email = mysqli_query($conexion, "SELECT * FROM alumno WHERE email='$correo'");

    if(mysqli_num_rows($verificar_email) > 0 ){
        echo '
            <script>
                alert("Este correo ya está registrado");
                window.location = "formulario.html";
            </script>
        ';
        exit();
    }

    ////////////////////////////////////////// Insertar usuario
    $query = "INSERT INTO alumno(nombre, apellidos, fecha_nacimiento, curso, email, contrasena) 
              VALUES ('$nombre', '$apellidos', '$fecha', '$curso', '$correo', '$contrasena')";

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
            $consulta = mysqli_query($conexion, "SELECT * FROM alumno WHERE email='$correo'");
            $datos = mysqli_fetch_assoc($consulta);

            echo "<h2> Registro exitoso</h2>";
            echo "<ul>";
            echo "<li><strong>Nombre:</strong> " . $datos['nombre'] . "</li>";
            echo "<li><strong>Apellidos:</strong> " . $datos['apellidos'] . "</li>";
            echo "<li><strong>Fecha de nacimiento:</strong> " . $datos['fecha_nacimiento'] . "</li>";
            echo "<li><strong>Curso:</strong> " . $datos['curso'] . "</li>";
            echo "<li><strong>Email:</strong> " . $datos['email'] . "</li>";
            echo "</ul>";
            echo "<a href='ongiEtorri.html'>Introducir datos</button></a>";
        
    } else {
        echo '
            <script>
                alert("No fue posible almacenar este usuario.");
                window.location = "ongiEtorri.html";
            </script>
        ';
    }

    mysqli_close($conexion);

?>