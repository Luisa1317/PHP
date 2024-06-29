<?php
include "conn.php";
    $id=$_GET["id"];
    $sql="DELETE FROM recetas WHERE id_receta=$id";
    if ($conn->query($sql) === TRUE) {
        echo '<script language="javascript">';
        echo 'alert("Registro eliminado exitosamente");';
        echo 'window.location.href = "#";';
        echo '</script>';
    } else {
        echo '<script language="javascript">';
        echo 'alert("Error al eliminar el registro: ' . $conn->error . '");';
        echo 'window.location.href = "#";';  
        echo '</script>';
    }
?>