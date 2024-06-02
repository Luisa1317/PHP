    <?php
        $localhost="localhost";
        $user="root";
        $pass="";
        $bd="BD";
        
        $conn=mysqli_connect($localhost, $user, $pass);
        if (!$conn){
            die("Conexión fallida: ".mysqli_connect_error());
        }
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];
        $email = $_POST['email'];
        $ciudad = $_POST['ciudad'];
        $estado = $_POST['estado'];
        $codigo_postal = $_POST['codigo_postal'];
        $numero_documento = $_POST['numero_documento'];

        $conn->select_db($bd);

        $sql="INSERT INTO Directorio VALUES ('','$nombre', '$apellido', '$telefono', '$direccion', '$email', '$ciudad', '$estado', '$codigo_postal', '$numero_documento')";
        
        if ($conn->query($sql) === TRUE) {
            echo "El usuario ingresado se llama ".$nombre. " ".$apellido.", su teléfono es ".$telefono.", su dirección es ".$direccion.", su email es ".$email.", su ciudad es ".$ciudad. ", su estado es ".$estado.", su código postal es ".$codigo_postal." y su número de documento es ".$numero_documento;
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        } 
    ?>
