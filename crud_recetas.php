<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CRUD-food Guard</title>
<link rel="stylesheet" href="css/estilosregistro.css">
<link rel="shortcut icon" type="image/png" href="logo.png">
<link rel="stylesheet" href="css/estiloscrud.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>
<div class="display">
	<form action="CRUD/registro.php" method="POST">
	<h2><b>Registro de recetas</b></h2>
		<label>Nombre: </label>
		<input type="text" name="nombre" maxlength="25" required><br>
		<label>Ingredientes: </label>
		<textarea name="ingredientes" rows="4" cols="30" required></textarea><br>
		<label>Instrucciones: </label>
		<textarea name="instrucciones" rows="4" cols="30" required></textarea><br>
		<label for="">Calorías totales: </label>
		<input type="number" min="1" max="1500" name="calorias" required><br>
		<label for="">Tiempo de preparación (en minutos): </label>
		<input type="number" min="1" max="1000" name="tiempo-preparacion" required><br>
		<label for="">Imagen (url):</label>
		<input type="text" name="imagen" required>
		<label for="">Categoría:</label><br>
		<input type="radio" name="categoria" value="Desayuno" required> Desayuno
		<input type="radio" name="categoria" value="Almuerzo"> Almuerzo
		<input type="radio" name="categoria" value="Cena"> Cena
		<input type="radio" name="categoria" value="Postre"> Postre <br>
		<input type="submit" name="Registrar receta">
	</form>
	

	<div class="container">
	<div class="table-wrapper">
		<div class="table-title">
		<div class="logo">
			<a alt="Logo de Food Guard"><img src="images/logo2.PNG" alt=""></a>
		</div>
		<div class="row">
			
			<div class="col-sm-6">
			<h2><b>TABLA DE RECETAS</b></h2>
		</div>
		
		</div>
		</div>
		<div class="datos">
		<table class="table table-striped table-hover">
		<thead>
			<tr>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Ingredientes</th>
			<th>Instrucciones</th>
			<th>Calorías totales</th>
			<th>Tiempo de preparación</th>
			<th>Imagen</th>
			<th>Categoría</th>
			<th>Acciones</th>
		</tr>
		</tr>
		</thead>
		<tbody>
		<?php
			include "CRUD/conn.php";
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			$sql=$conn->query("SELECT * FROM recetas");
			if ($sql === false) {
				die("Error en la consulta: " . $conn->error);
			}
			while ($datos=$sql->fetch_object()){ 
		?>
                    <tr>
			<th><?php echo $datos->id_receta ?></th>
			<td><?php echo $datos->nombre?></td>
			<td><?php echo $datos->ingredientes ?></td>
			<td><?php echo $datos->instrucciones ?></td>
			<td><?php echo $datos->calorias_totales ?></td>
			<td><?php echo $datos->tiempo_preparacion ?></td>
			<td><?php echo $datos->imagen ?></td>
			<td><?php echo $datos->categoria ?></td>
			<td>
			<a href="CRUD/editar.php?id=<?php echo $datos->id_receta ?>"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
			<a href="CRUD/eliminar.php?id=<?php echo $datos->id_receta ?>"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
			</td>
                    </tr>
                    <?php
			}
		?>
		</tbody>
			</table>
			</div>
				<div class="clearfix">
		<div class="hint-text">Mostrando <b>5</b> de <b> 25 </b>entradas</div>
		<ul class="pagination">
			<li class="page-item disabled"><a href="#">Previa</a></li>
			<li class="page-item"><a href="#" class="page-link">1</a></li>
			<li class="page-item"><a href="#" class="page-link">2</a></li>
			<li class="page-item active"><a href="#" class="page-link">3</a></li>
			<li class="page-item"><a href="#" class="page-link">4</a></li>
			<li class="page-item"><a href="#" class="page-link">5</a></li>
			<li class="page-item"><a href="#" class="page-link">siguiente</a></li>
		</ul>
		</div>
	</div>
	</div>
	</div>
</body>
</html>