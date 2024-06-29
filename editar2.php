<?php
    include "conn.php";

    $id=$_POST["id"];
    $nombre=$_POST["nombre"];
    $ingredientes=$_POST["ingredientes"];
    $instrucciones=$_POST["instrucciones"];
    $calorias_totales=$_POST["calorias"];
    $tiempo_preparacion=$_POST["tiempo-preparacion"];
    $imagen=$_POST["imagen"];
    $categoria=$_POST["categoria"];

    $sql="UPDATE recetas SET 
    nombre='".$nombre."',
    ingredientes='".$ingredientes."', 
    instrucciones='".$instrucciones."',
    calorias_totales='".$calorias_totales."',
    tiempo_preparacion='".$tiempo_preparacion."',
    imagen='".$imagen."',
    categoria='".$categoria."' WHERE id_receta=$id";

    if($conn->query($sql)==TRUE){
        echo '<script language="javascript">';
        echo 'alert("Registro editado exitosamente");';
        echo 'window.location.href = "#";';  
        echo '</script>';
    } else {
        echo '<script language="javascript">';
        echo 'alert("Error al editar: ' . $conn->error . '");';
        echo 'window.location.href = "#";';  
        echo '</script>';
    }
?>