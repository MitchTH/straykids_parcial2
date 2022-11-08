<?php

    include 'conexion.php';

    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $numero = $_POST["numero"];
    $contrasena = $_POST["contrasena"];
    $domicilio = $_POST["domicilio"];
    

    $sql = "UPDATE usuarios SET nombre='".$nombre."' , correo= ".$correo.",". 
    "numero = '".$numero."', domicilio = '".$domicilio."', contrasena ='".$contrasena."'"."WHERE id=".$id;

    if($conexion->query($sql) === TRUE){
        echo "Registro guardado con Éxito <a href='consultarDatos.php'>Regresar</a>";
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";

    }

    $conexion->close();

?>