<?php echo form_open('Actividades/record'); ?>
<div class="container">
	<div class="form-group">
		<label>Titulo</label>
		<input type="text" name="titulo" class="form-control">
	</div>
	<div class="form-group">
		<label>Descripcion</label>
		<input type="text" name="descripcion" class="form-control">
	</div>
	<input type="submit" name="btnEnviar" value="Enviar datos">
</div>
