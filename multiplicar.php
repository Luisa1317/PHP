<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio</title>
</head>
<body>
    <h2>Tabla de multiplicar</h2>
    <form action="multiplica.php" method="post">
        <label for="valor_inicial">Valor inicial:</label>
        <input type="number" name="valor_inicial" required> <br><br>
        <label for="valor_limite">Valor límite:</label>
        <input type="number" name="valor_limite" required> <br><br>
        <label for="valor_tabla">Valor de la tabla:</label>
        <input type="number" name="valor_tabla" required> <br><br>
        <input type="submit" value="Generar tabla">
    </form>
    <?php
        $valor_inicial=$_POST['valor_inicial'];
        $valor_limite=$_POST['valor_limite'];
        $valor_tabla=$_POST['valor_tabla'];
        echo "<table border='1'>";
        for ($i = $valor_inicial; $i <=$valor_limite; $i++){
            $producto=$valor_tabla*$i;
            echo $valor_tabla.' * '.$i.' = '.$producto.'<br>';
        }
    ?>
</body>
</html>
