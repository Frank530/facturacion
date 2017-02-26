<!DOCTYPE html>
<html>
<head>
	<title>Operaciones</title>
	<meta charset="utf-8">
</head>
<body>
	<h3>Operacion</h3>
	<form action="<?php echo site_url();?>Saludo/calcular" method="post">
		valor 1:<input type="text" name="valor1"><br>
		valor 2:<input type="text" name="valor2"><br>
		Operacion:
		<select name="operacion">
			<option value="1">+</option>
			<option value="2">-</option>
			<option value="3">/</option>
			<option value="4">*</option>
		</select>

		<input type="submit" name="btnEnviar">

	</form>
	<p>
		<?php 
			if (isset($resultado)) {
				echo "Resultado de la operacion: ".$resultado;
			}
		?>
	</p>
</body>
</html>  