<?php
include("/xampp/htdocs/PALPLI/Inicio/conexion.php");

// Obtener datos del formulario
$primer_nombre = isset($_POST['primer_nombre']) ? $_POST['primer_nombre'] : '';
$segundo_nombre = isset($_POST['segundo_nombre']) ? $_POST['segundo_nombre'] : '';
$apellido1 = isset($_POST['apellido1']) ? $_POST['apellido1'] : '';
$documento = isset($_POST['documento']) ? $_POST['documento'] : '';
$correo = isset($_POST['correo']) ? $_POST['correo'] : '';
$celular = isset($_POST['celular']) ? $_POST['celular'] : '';
$direccion = isset($_POST['direccion']) ? $_POST['direccion'] : '';
$contrasena = isset($_POST['contrasena']) ? $_POST['contrasena'] : '';

// Consultar si el documento ya existe en la base de datos
$consulta_documento = "SELECT * FROM usuarios WHERE DOCUMENTO='$documento'";
$resultado_documento = mysqli_query($conexion, $consulta_documento);

if ($resultado_documento) {
    $filas_documento = mysqli_num_rows($resultado_documento);

    if ($filas_documento > 0) {
        echo '<center><h1 class="bad">El usuario con este documento ya está registrado</h1></center>';
    } else {
        // Insertar nuevo usuario en la base de datos
        $insertar_usuario = "INSERT INTO usuarios (DOCUMENTO, PRIMER_NOM, SEGUNDO_NOM, APELLIDO1, CELULAR, DIRECCION, CORREO, CONTRASEÑA, ESTADO)
                            VALUES ('$documento', '$primer_nombre', '$segundo_nombre', '$apellido1', '$celular', '$direccion', '$correo', '$contrasena', 'activo')";

        if (mysqli_query($conexion, $insertar_usuario)) {
            echo '<center><h1 class="good">Usuario registrado correctamente</h1></center>';
        } else {
            echo '<center><h1 class="bad">Error al registrar el usuario: ' . mysqli_error($conexion) . '</h1></center>';
        }
    }
} else {
    echo '<center><h1 class="bad">Error en la consulta: ' . mysqli_error($conexion) . '</h1></center>';
}

mysqli_close($conexion);
?>
