<?php
include("/xampp/htdocs/PALPLI/Inicio/conexion.php");

var_dump($_POST);

// CREAR VARIABLES PARA VERIFICAR AL USUARIO
$documento = filter_input(INPUT_POST, 'usuario');
$password = filter_input(INPUT_POST, 'clave');
$documento = $_POST['documento'];
$contrasena = $_POST['contrasena'];

// INICIAR SESSION
session_start();

// CONSULTAR SI LO QUE ESTÁ REGISTRANDO EL USUARIO ES VÁLIDO CON LO QUE HAY EN LA BASE DE DATOS
include("/xampp/htdocs/PALPLI/Inicio/conexion.php");
mysqli_set_charset($conexion, "utf8");

$consulta = "SELECT * FROM admin WHERE documento='$documento' and contrasena='$contrasena'";
$resultado = mysqli_query($conexion, $consulta);

if ($resultado) {
    $filas = mysqli_num_rows($resultado);

    if ($filas) {
        $row = mysqli_fetch_assoc($resultado);
        $_SESSION['usuario'] = $documento;
        $_SESSION['documento'] = $row['DOCUMENTO'];
        header("location: home.php");
    } else {
        echo '<center><h1 class="bad">La contraseña y/o el Documento es erroneo</h1></center>';
    }
} else {
    echo "Error en la consulta: " . mysqli_error($conexion);
}

// Cerrar la conexión a la base de datos cuando hayas terminado
mysqli_close($conexion);
?>



