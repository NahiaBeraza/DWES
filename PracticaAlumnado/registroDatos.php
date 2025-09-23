<?php

    include 'conexion.php';

    
    $nombre = $_POST['nombre'];
    $apellidos = $_POST ['apellidos'];
    $fecha = $_POST ['fecha_nacimiento'];
    $curso = $_POST ['curso'];
    $correo = $_POST['email'];
    $contrasena = $_POST ['contrasena'];

    //Encriptamiento
    //$contrasena = hash('sha512', $contrasena);
 
    ////////////////////////////////////////// Verificar que no se repita el email
    
    $verificar_email = mysqli_query($conexion, "SELECT * FROM alumno WHERE email='$correo'");

    if(mysqli_num_rows($verificar_email) > 0 ){
        echo '
            <script>
                alert("Este correo ya está registrado");
                window.location = "login.php";
            </script>
        ';
        exit();
    }

    ////////////////////////////////////////// Insertar usuario
    $query = "INSERT INTO alumno(nombre, apellidos, fecha_nacimiento, curso, email, contrasena) 
              VALUES ('$nombre', '$apellidos', '$fecha', '$curso', '$correo', '$contrasena')";

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario almacenado correctamente.");
                window.location = "login.php";
            </script>
        ';
    } else {
        echo '
            <script>
                alert("No fue posible almacenar este usuario.");
                window.location = "login.php";
            </script>
        ';
    }

    mysqli_close($conexion);

?>