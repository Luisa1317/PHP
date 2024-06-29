<?php
include "conn.php";
    $id=$_GET["id"];
    $sql=$conn->query("SELECT * FROM recetas WHERE id_receta=$id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
<h2>Editar receta</h2>
    <form action="editar2.php" method="POST">
        <input type="hidden" name="id" value="<?=$_GET["id"] ?>">
        <?php 
        while($datos=$sql->fetch_object()){ 
        ?>
        <label>Nombre: </label>
        <input type="text" name="nombre" value="" maxlength="25"><br>
        <label>Ingredientes: </label>
        <textarea name="ingredientes" value="" rows="4" cols="30"></textarea><br>
        <label>Instrucciones: </label>
        <textarea name="instrucciones" value="<" rows="4" cols="30"></textarea><br>
        <label for="">Calorías totales: </label>
        <input type="number" min="1" max="1500" name="calorias" value=""><br>
        <label for="">Tiempo de preparación (en minutos): </label>
        <input type="number" min="1" max="1000" name="tiempo-preparacion" value=""><br>
        <label for="">Imagen (url):</label>
		<input type="text" name="imagen"><br>
        <label for="">Categoría:</label><br>
        <input type="radio" name="categoria" value="Desayuno"> Desayuno
        <input type="radio" name="categoria" value="Almuerzo"> Almuerzo
        <input type="radio" name="categoria" value="Cena"> Cena
        <input type="radio" name="categoria" value="Postre"> Postre <br>
        <input type="submit" name="Editar receta">
            <?php } ?>
    </form>
</body>
</html>
