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

    $sql = "SELECT * FROM directorio WHERE numero_documento='$numero_documento'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        while ($consulta = mysqli_fetch_array($result)) {
            echo "ID: " . $consulta[0] . " - Nombre: " . $consulta[1] . " " . $consulta[2] . " - Teléfono: " . $consulta[3] . " - Dirección: " . $consulta[4] . " - Email: " . $consulta[5] . " - Ciudad: " . $consulta[6] . " - Estado: " . $consulta[7] . " - Código Postal: " . $consulta[8] . " - Documento: " . $consulta[9] . "<br>";
        }
    } else {
        echo "Error en la consulta: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>
