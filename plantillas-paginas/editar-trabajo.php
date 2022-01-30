<?php include 'inc/header.php';?>
<h2 class="page-header" style="text-align: center;">Editar Oferta de Trabajo</h2>
<form class="form-style-5" method="post" action="editar.php?id=<?php echo $trabajo->id; ?>">
	<div class="form-group">
		<label>Empresa</label><br>
		<input type="text" class="form-control" name="empresa" 
		value="<?php echo $trabajo->empresa; ?>">
	</div>
	<div class="form-group">
		<label>Categoría</label><br>
		<select class="form-control" name="categoria">
			<option value="0">Elegir Categoría</option>
			<?php foreach ($categorias as $categoria): ?>
				<?php if ($trabajo->id_categoria == $categoria->id) : ?>
					<option value="<?php echo $categoria->id; ?>" selected>
						<?php echo $categoria->categoria; ?>
					</option>
				<?php else: ?>
					<option value="<?php echo $categoria->id; ?>">
						<?php echo $categoria->categoria; ?>
					</option>

				<?php endif; ?>

			<?php endforeach; ?>
		</select>
	</div>
	<div class="form-group">
		<label>Título del trabajo</label><br>
		<input type="text" class="form-control" name="titulo_trabajo" value="<?php echo $trabajo->titulo_trabajo; ?>">
	</div>
	<div class="form-group">
		<label>Descripción</label><br>
		<textarea class="form-control" name="descripcion"><?php echo $trabajo->descripcion; ?></textarea>
	</div>
	<div class="form-group">
		<label>Ubicación</label><br>
		<input type="text" class="form-control" name="ubicacion" value="<?php echo $trabajo->ubicacion; ?>">
	</div>
	<div class="form-group">
		<label>Salario</label><br>
		<input type="text" class="form-control" name="salario" value="<?php echo $trabajo->salario; ?>">
	</div>
	<div class="form-group">
		<label>Contacto de usuario</label><br>
		<input type="text" class="form-control" name="contacto_usuario" value="<?php echo $trabajo->contacto_usuario; ?>">
	</div>
	<div class="form-group">
		<label>Email de contacto</label><br>
		<input type="text" class="form-control" name="contacto_email" value="<?php echo $trabajo->contacto_email; ?>">
	</div>
	<input type="submit" class="btn btn-default" value="Enviar" name="submit">
</form>
<?php include 'inc/footer.php';?>