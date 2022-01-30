<?php include 'inc/header.php';?>
<h2 class="page-header" style="text-align: center;">Crear Oferta de Trabajo</h2>
<form class="form-style-5" method="post" action="crear.php">
	<div class="form-group">
		<label>Empresa</label><br>
		<input type="text" class="form-control" name="empresa">
	</div>
	<div class="form-group">
		<label>Categoría</label><br>
		<select class="form-control" name="categoria">
			<option value="0">Elegir Categoría</option>
			<?php foreach ($categorias as $categoria): ?>
				<option value="<?php echo $categoria->id; ?>">
					<?php echo $categoria->categoria; ?>
				</option>
			<?php endforeach; ?>
		</select>
	</div>
	<div class="form-group">
		<label>Título del trabajo</label><br>
		<input type="text" class="form-control" name="titulo_trabajo">
	</div>
	<div class="form-group">
		<label>Descripción</label><br>
		<textarea class="form-control" name="descripcion"></textarea>
	</div>
	<div class="form-group">
		<label>Ubicación</label><br>
		<input type="text" class="form-control" name="ubicacion">
	</div>
	<div class="form-group">
		<label>Salario</label><br>
		<input type="text" class="form-control" name="salario">
	</div>
	<div class="form-group">
		<label>Contacto de usuario</label><br>
		<input type="text" class="form-control" name="contacto_usuario">
	</div>
	<div class="form-group">
		<label>Email de contacto</label><br>
		<input type="text" class="form-control" name="contacto_email">
	</div>
	<input type="submit" class="btn btn-default" value="Enviar" name="submit">
</form>
<?php include 'inc/footer.php';?>