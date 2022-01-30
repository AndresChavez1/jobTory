<?php include 'inc/header.php';?>
<div class="main" style="background-color: white;">
	<h2 class="page-header"><?php echo $trabajo->titulo_trabajo; ?> (<?php echo $trabajo->ubicacion; ?>)</h2>
<small>Publicado por <?php echo $trabajo->contacto_usuario; ?> el <?php echo $trabajo->fecha; ?></small>
<hr>
<p ><?php echo $trabajo->descripcion; ?></p>
<ul class="list-group">
	<li class="list-group-item"><strong>Empresa:</strong> <?php echo $trabajo->empresa ?></li>
	<li class="list-group-item"><strong>Salario:</strong> <?php echo $trabajo->salario ?></li>
	<li class="list-group-item"><strong>Email de contacto:</strong> <?php echo $trabajo->contacto_email ?></li>
</ul>
<br>
 <br>
<!-- Botón de regreso -->
<a href="index.php"><i class="fas fa-undo-alt" style="font-size: 20px;"></i></a>
<div style="margin: 20px; font-size: 15px;">
	<a href="editar.php?id=<?php echo $trabajo->id; ?>" class = "btn btn-default button4" style="background-color:green; width: 110px; height: 36px; ">Editar</a>
	<form style="display:inline;" method="post" action="trabajo.php">
		<input type="hidden" name="del_id" value="<?php echo $trabajo->id; ?>">
		<input type="submit" class="btn btn-default button4" value="Eliminar"style="background-color:red; ">
	</form>
</div>
</div>
<?php include 'inc/footer.php';?>