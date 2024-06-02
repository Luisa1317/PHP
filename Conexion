<?php
    $localhost="localhost";
    $user="root";
    $pass="";
    $bd="BD";

    $conn=mysqli_connect($localhost, $user, $pass);
    if (!$conn){
        die("Conexión fallida: ".mysqli_connect_error());
    } else {
        echo "Conexión exitosa";
    }

    $sql="CREATE DATABASE BD";
    if (mysqli_query($conn, $sql)){
        echo "<br>Base de datos creada";
    } else {
        echo "<br>Error creando la BD".mysqli_error($conn);
    }

    $conn->select_db($bd);

    $sql="CREATE TABLE Directorio(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL,
    apellido VARCHAR(30) NOT NULL,
    telefono VARCHAR(15) NOT NULL,
    direccion VARCHAR(50),
    email VARCHAR(50),
    ciudad VARCHAR(30),
    estado VARCHAR(30),
    codigo_postal VARCHAR(10),
    numero_documento VARCHAR(20) UNIQUE
    )";

    if (mysqli_query($conn, $sql)){
        echo "<br>Tabla Directorio creada";
    } else {
        echo "<br>Error creando la tabla Directorio".mysqli_error($conn);
    }

    mysqli_close($conn);
?>
