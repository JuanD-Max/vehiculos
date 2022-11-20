<?php

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $data["titulo"]; ?></title>
	<link rel="stylesheet" type="text/css" href="views/vehiculos/estilos.css">
</head>
<body>
	<main>
		<div class="formulario">
			<form id="nuevo" class="form" name="nuevo" method="POST" action="index.php?c=vehiculos&a=actualizar" autocomplete="off">
				<h2 class="form__title">Edición de Datos</h2>
				<div class="form__container">
					<input type="hidden" id="id" name="id" value="<?php echo $data["id"] = $id; ?>">
					<div class="form__group">
						<input type="text" id="placa" class="form__input" name="placa" placeholder=" " value="<?php echo $data["vehiculos"]["placa"] ?>">
						<label for="placa" class="form__label">Placa</label>
						<span class="form__line"></span>
					</div>
					<div class="form__group">
						<input type="text" id="marca" class="form__input" name="marca" placeholder=" " value="<?php echo $data["vehiculos"]["marca"] ?>">
						<label for="marca" class="form__label">Marca</label>
						<span class="form__line"></span>
					</div>
					<div class="form__group">
						<input type="text" id="modelo" class="form__input" name="modelo" placeholder=" " value="<?php echo $data["vehiculos"]["modelo"] ?>">
						<label for="modelo" class="form__label">Modelo</label>
						<span class="form__line"></span>
					</div>
					<div class="form__group">
						<input type="text" id="anio" class="form__input" name="anio" placeholder=" " value="<?php echo $data["vehiculos"]["anio"] ?>">
						<label for="anio" class="form__label">Año</label>
						<span class="form__line"></span>
					</div>
					<div class="form__group">
						<input type="text" id="color" class="form__input" name="color" placeholder=" " value="<?php echo $data["vehiculos"]["color"] ?>">
						<label for="color" class="form__label">Color</label>
						<span class="form__line"></span>
					</div>
					<input type="submit" name="guardar" id="guardar" class="form__submit" value="Guardar">
				</div>
			</form>
		</div>
	</main>
</body>
</html>