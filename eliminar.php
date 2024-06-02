<?php
    $localhost="localhost";
    $user="root";
    $pass="";
    $bd="BD";

    $conn=mysqli_connect($localhost, $user, $pass);
    if (!$conn){
        die("Conexión fallida: ".mysqli_connect_error());
    }

    $conn->select_db($bd);
    $numero_documento = $_POST['numero_documento'];

    $sql = "DELETE FROM directorio WHERE numero_documento='$numero_documento'";
    if (mysqli_query($conn, $sql)){
        echo "Registro eliminado";
    } else {
        echo "Error eliminando el registro: ".mysqli_error($conn);
    }
    mysqli_close($conn);
?>
