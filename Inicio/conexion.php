<?php
    $conexion = mysqli_connect("localhost", "root", "","inventario_biblioteca_prueba") ;
    
    if(!$conexion){
        die("Ha sucedido un error inexperado en la conexion de la base de datos" . mysqli_error());
    }
?>
