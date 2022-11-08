<?php

    include 'conexion.php';

    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $numero = $_POST["numero"];
    $contrasena = $_POST["contrasena"];
    $domicilio = $_POST["domicilio"];
    

    $sql = "INSERT INTO usuarios (nombre, contrasena,correo, numero, domicilio)". 
    " VALUES ('".$nombre."','".$contrasena."', '".$correo."', ".$numero.", '".$domicilio."')";

    if($conexion->query($sql) === TRUE){
        echo "Registro guardado con Éxito <a href='consultarDatos.php'>Regresar</a>";
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";
    }

    $conexion->close();
?>