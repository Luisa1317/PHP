<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio</title>
</head>
<body>
<form method="post" action="">
        <h3>Integrante 1</h3>
        Nombre: <input type="text" name="nombre1" required><br>
        Apellido: <input type="text" name="apellido1" required><br>
        Año de nacimiento: <input type="number" name="anio1" min="1" max="2024" required><br>
        
        <h3>Integrante 2</h3>
        Nombre: <input type="text" name="nombre2" required><br>
        Apellido: <input type="text" name="apellido2" required><br>
        Año de nacimiento: <input type="number" name="anio2" min="1" max="2024" required><br>
        
        <h3>Integrante 3</h3>
        Nombre: <input type="text" name="nombre3" required><br>
        Apellido: <input type="text" name="apellido3" required><br>
        Año de nacimiento: <input type="number" name="anio3" min="1" max="2024" required><br>
        
        <input type="submit" name="submit" value="Calcular Edades">
    </form>
    <?php
        if (isset($_POST['submit'])){
            $apellido1=$_POST['apellido1'];
            $apellido2=$_POST['apellido2'];
            $apellido3=$_POST['apellido3'];
            $nombre1=$_POST['nombre1'];
            $nombre2=$_POST['nombre2'];
            $nombre3=$_POST['nombre3'];
            $anio1=$_POST['anio1'];
            $anio2=$_POST['anio2'];
            $anio3=$_POST['anio3'];
            function calcular_edad($nombre, $apellido, $anio_nacimiento, $n_integrante){
                $edad=2024-$anio_nacimiento;
                echo 'El integrante '.$n_integrante.' se llama '.$nombre.' y su apellido es '.$apellido.'. Tiene '.$edad.' años.<br>';
            }
            
            calcular_edad($nombre1, $apellido1, $anio1, 1);
            calcular_edad($nombre2, $apellido2, $anio2, 2);
            calcular_edad($nombre3, $apellido3, $anio3, 3);
        }
    ?>
</body>
</html>
