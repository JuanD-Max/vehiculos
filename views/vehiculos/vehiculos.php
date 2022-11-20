<?php

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $data["titulo"]; ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="views/vehiculos/estilos.css">
	<script src="https://kit.fontawesome.com/da7eeda7ac.js" crossorigin="anonymous"></script>
</head>
<body>
	<header class="cabecera">
		<h1><?php echo $data["titulo"]; ?></h1>
	</header>
	<main>
		<div class="index-tabla">
			<div class="agregar">
				<a href="index.php?c=VEHICULOS&a=nuevo"><span>Agregar</span><i class="fa-solid fa-circle-plus"></i></a>
			</div>
			<br/>
			<br/>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Placa</th>
						<th>Marca</th>
						<th>Modelo</th>
						<th>Año</th>
						<th>Color</th>
						<th>Editar</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($data["vehiculos"] as $dato){
						echo "<tr>";
						echo "<td>".$dato["placa"]."</td>";
						echo "<td>".$dato["marca"]."</td>";
						echo "<td>".$dato["modelo"]."</td>";
						echo "<td>".$dato["anio"]."</td>";
						echo "<td>".$dato["color"]."</td>";
						echo "<td><a href='index.php?c=vehiculos&a=modificar&id=".$dato["id"]."'><i class='fa-solid fa-pen-to-square'></i></a></td>";
						echo "<td><a href='index.php?c=vehiculos&a=eliminar&id=".$dato["id"]."'><i class='fa-solid fa-trash'></i></a></td>";
						echo "</tr>";
					} ?>
				</tbody>
			</table>
		</div>
	</main>
</body>
</html>