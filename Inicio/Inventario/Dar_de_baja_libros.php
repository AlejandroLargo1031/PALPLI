
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú</title>
    <link rel="stylesheet" href="CSS/inventario.css">

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
    
    <div class="rectangulo-bajalibros">
        <table id="tabla-libros">
            <thead>
                <tr>
                    <th>ㅤ</th>
                    <th>ㅤCódigo</th>
                    <th>ㅤㅤㅤNombreㅤ</th>
                    <th>ㅤㅤㅤㅤAutorㅤㅤ</th>
                    <th>ㅤㅤEditorial</th>
                    <th>ㅤㅤClasificación</th>
                    <th>ㅤCantidad</th>
                    <th>ㅤCopia</th>
                    <th>ㅤㅤFecha</th>     
                    <th>ㅤㅤㅤㅤㅤㅤㅤDescripciónㅤㅤ</th> 
                </tr>
            </thead>
            <tbody id="tabla-libros-body">
            </tbody>
        </table>
    </div>
    </div>

    <div class="search-containerlib">
        <input type="text" id="searchInputlib" placeholder="Buscar...">
        <button id="searchButtonlib">Buscar</button>
    </div>
    <div class="estado-container">
        <label for="estado"></label>
        <textarea id="estado" placeholder="MOTIVOS..."></textarea>
        <div class="fecha-entrega-container">
            <br>
            <label for="fechaEntrega">Fecha del proceso: <br></label>
            <input type="date" id="fechaEntrega">
        </div>
        <div class="registrar-button-container">
            <button id="registrarButton" class="green-button">Dar de baja</button>
        </div>
    </div>
    
    
    <script src="CSS/inventario.js"></script>
</body>
</html>