<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software PALPLI - Inicio de Sesión</title>
    <link rel="stylesheet" href="CSS/estilos.css">
</head>
<body>
    <img id="logo" src="https://i.postimg.cc/28m15wVf/l7-removebg-preview-1.png" alt="Logo">
    <h1>Bienvenido al Software PALPLI</h1>
    <p>Manejo del Inventario de Libros de la I.E.N.S.CH</p>

    <section id="inicio-sesion">
        <h2>Iniciar Sesión</h2>
        <form action="verificacion.php" method="POST">
            <label for="documento">Documento de Identidad:</label>
            <input type="text" id="documento" name="documento" required>
            <br>
            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required>
            <button class="show-password-button mostrar-contrasena" type="button" onclick="mostrarContrasena('contrasena')">Mostrar Contraseña</button>
            <br>
            <button class="iniciar-sesion" type="submit">Iniciar Sesión</button>
        </form>
    </section>
    
    <script src="CSS/main.js"></script>
    <script src="/Inicio/verificacion.php"></script>
    <script src="/conexion.php"></script>
</body>
</html>
