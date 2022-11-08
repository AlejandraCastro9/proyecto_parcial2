<?php

    include 'conexion.php';

    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $ingredientes = $_POST["ingredientes"];

    $sql = "INSERT INTO menu (nombre, precio, ingredientes)". 
    "VALUES ('".$nombre."', '".$precio."', '".$ingredientes."')";

    if($conexion->query($sql) === TRUE){
        echo "Registro guardado con Éxito <a href='consultarDatos.php'>Regresar</a>";
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";
    }

    $conexion->close();
?>