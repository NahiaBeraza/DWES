<?php
include 'conexion.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];


$consulta = mysqli_query($conexion, "SELECT * FROM alumno WHERE email='$correo' AND contrasena='$contrasena'");

if (mysqli_num_rows($consulta) > 0) {
    //borrar usuario
    $borrar = mysqli_query($conexion, "DELETE FROM alumno WHERE email='$correo' AND contrasena='$contrasena'");
    echo '
        <script>
            alert("Usuario eliminado correctamente.");
            window.location = "ongiEtorri.html";
        </script>
    ';
} else {

    echo '
        <script>
            alert("Correo o contraseña incorrectos. No se pudo eliminar.");
            window.location = "borrar.html";
        </script>
    ';
}
?>
