<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar usuarios</title>
    <link rel="stylesheet" href="CSS/usuarios.css">

</head>
<body>
<?php $url="http://".$_SERVER['HTTP_HOST']."/Palpli" ?>

<nav class="nav">
    <ul class="list">

        <li class="list__item">
            <div class="list__button">
                <img src="https://i.postimg.cc/zBYJw4SL/dashboard.png" class="list__img">
                <a href="<?php echo $url;?>/Inicio/home.php" class="nav__link">Inicio</a>
            </div>
        </li>

        <li class="list__item list__item--click">
            <div class="list__button list__button--click">
                <img src="https://i.postimg.cc/xThBbMP8/docs.png" class="list__img">
                <a class="nav__link">Inventario</a>
                <img src="https://i.postimg.cc/FRTjkb3B/arrow.png" class="list__arrow">
            </div>
            <ul class="list__show">
            <li class="list__inside">
            <button onclick="window.location.href='<?php echo $url; ?>/Inicio/Inventario/Libros_almacenados.php'" class="nav__button nav__button--inside" id="boton-libros-almacenados">Libros almacenados</button>
<div class="rectangle" id="rectangulo-libros-almacenados"></div>

            </li> 
        <br>
            <li class="list__inside">
                <button onclick="window.location.href='<?php echo $url; ?>/Inicio/Inventario/Registrar_libros.php'" class="nav__button nav__button--inside" id="boton-registrar-libros">Registrar nuevos libros</button>
                <div class="rectangle" id="rectangulo-registrar-libros"></div>
            </li>
        <br>
            <li class="list__inside">
                <button onclick="window.location.href='<?php echo $url; ?>/Inicio/Inventario/Dar_de_baja_libros.php'" class="nav__button nav__button--inside" id="boton-dar-de-baja">Dar de baja libros</button>
                <div class="rectangle" id="rectangulo-dar-de-baja"></div>
            </li>
        </li>
    </ul>

        <li class="list__item list__item--click">
            <div class="list__button list__button--click">
                <img src="https://i.postimg.cc/JhWgp8vW/stats.png" class="list__img">
                <a class="nav__link">Registros</a>
                <img src="https://i.postimg.cc/FRTjkb3B/arrow.png" class="list__arrow">
            </div>
        
            <ul class="list__show">
                <li class="list__inside">
                    <button onclick="window.location.href='<?php echo $url; ?>/Inicio/Registros/Libros_prestados.php'"class="nav__button nav__button--inside">Libros prestados</button>
                    <div class="rectangle"></div>
                </li>
        <br>
                <li class="list__inside">
                    <button onclick="window.location.href='<?php echo $url; ?>/Inicio/Registros/prestar_libros.php'" class="nav__button nav__button--inside">Préstamo de libros</button>
                    <div class="rectangle"></div>
                </li>
        <br>
                <li class="list__inside">
                    <button onclick="window.location.href='<?php echo $url; ?>/Inicio/Registros/Devolucion.php'"class="nav__button nav__button--inside">Devolución de libros</button>
                    <div class="rectangle"></div>
                </li>
            </ul>
        </li>
        

        <li class="list__item list__item--click">
            <div class="list__button list__button--click">
                <img src="https://i.postimg.cc/8cDzGx78/bell.png" class="list__img">
                <a class="nav__link">Usuarios</a>
                <img src="https://i.postimg.cc/FRTjkb3B/arrow.png" class="list__arrow">
            </div>
        
            <ul class="list__show">
                <li class="list__inside">
                    <button onclick="window.location.href='<?php echo $url; ?>/Inicio/Usuarios/Usuarios_registrados.php'" class="nav__button nav__button--inside">Usuarios registrados</button>
                    <div class="rectangle"></div>
                </li>
        <br>
                <li class="list__inside">
                    <button onclick="window.location.href='<?php echo $url; ?>/Inicio/Usuarios/Registrar_usuarios.php'"class="nav__button nav__button--inside">Registrar usuario</button>
                    <div class="rectangle"></div>
                </li>
        <br>
                <li class="list__inside">
                    <button onclick="window.location.href='<?php echo $url; ?>/Inicio/Usuarios/Dar_de_baja_usuarios.php'" class="nav__button nav__button--inside">Dar de baja usuarios</button>
                    <div class="rectangle"></div>
                </li>
            </ul>
        </li>
        
        <li class="list__item">
            <div class="list__button">
                <img src="https://i.postimg.cc/4N7SZnTg/message.png" class="list__img">
                <a onclick="window.location.href='<?php echo $url; ?>/Inicio'" class="nav__link">Salir</a>
            </div>
        </li>

    </ul>
</nav>
    <li class="rectangulo-registrarusuarios">
    <br>
        <form action="registro.php" method="POST">
            <h2>Registro usuarios</h2>
            <br>
            <div class="formulario">
            <div class="columna-izquierda">
                <label for="primerNombre">Primer Nombre:</label>
                <input type="text" id="primerNombre" name="primerNombre" required>
                <br>
                <label for="nombre">Segundo nombre:</label>
                <input type="text" id="nombre" name="nombre">
                <br>
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido">
                <br>
                <label for="documento">Documento de Identidad:</label>
                <input type="text" id="documento" name="documento" required oninput="validarDocumento()" inputmode="numeric">
                <span id="documentoMessage">
                    El documento debe estar sin puntos, slash o guiones
                </span>
                
                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" inputmode="numeric" pattern="[0-9]{10}" required>
                <br>
                
            </div>
            
            <div class="columna-derecha">
                <label for="direccion">Direccion:</label>
                <input type="text" id="direccion" name="direccion" required>
                <br>
                <label for="correo">Correo Electrónico:</label>
                <input type="email" id="correo" name="correo" required onblur="validarCorreo()" oninput="actualizarColorCorreo()">
                <br>
                <span id="emailRequirements" class="checklist">
                    Debe contener '@' y no debe contener espacios en blanco
                </span>
                <label for="contrasena_registro">Contraseña:</label>
                <input type="password" id="contrasena_registro" name="contrasena_registro" required>
                <br>
                <button class="show-password-button" type="button" onclick="mostrarContrasena('contrasena_registro')">Mostrar Contraseña</button>
                <br>
                <span id="passwordRequirements" class="checklist">
                    Mínimo 6 caracteres
                    <br> Una mayúscula <br> Números <br> Signos (@#$%^&+=!) <br> Sin espacios en blanco <br>
                </span>
                <br>
                
            </div>
            <br>
            <input type="submit" value="Registrarse">
        </div>
    <script src="CSS/usuarios.js"></script>
    <script src="/conexion.php"></script>
</body>
</html>