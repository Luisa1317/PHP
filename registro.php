<?php
    include "conn.php";
    $nombre=$_POST["nombre"];
    $ingredientes=$_POST["ingredientes"];
    $instrucciones=$_POST["instrucciones"];
    $calorias_totales=$_POST["calorias"];
    $tiempo_preparacion=$_POST["tiempo-preparacion"];
    $imagen=$_POST["imagen"];
    $categoria=$_POST["categoria"];

    $sql="INSERT INTO recetas VALUES(
        '',
        '$nombre',
        '$ingredientes',
        '$instrucciones',
        '$calorias_totales',
        '$tiempo_preparacion',
        '$imagen',
        '$categoria'
    )";
    if ($conn->query($sql) === TRUE) {
        echo '<script language="javascript">';
        echo 'alert("Registro ingresado exitosamente");';
        echo 'window.location.href = "#";';  
        echo '</script>';
    } else {
        echo '<script language="javascript">';
        echo 'alert("Error al registrar: ' . $conn->error . '");';
        echo 'window.location.href = "#";';  
        echo '</script>';
    }
?>