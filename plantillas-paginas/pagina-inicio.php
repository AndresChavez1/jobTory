<?php include 'inc/header.php';?>

<div class="header">
	<h1>Encuentra un trabajo</h1>
	<form method="GET" action="index.php" class="form-style-5">
		<select name="categoria" class="form-control">
			<option value="0">Elegir Categoría</option>
			<?php foreach ($categorias as $categoria): ?>
				<option value="<?php echo $categoria->id; ?>">
					<?php echo $categoria->categoria; ?>
				</option>
			<?php endforeach; ?>
			</select>
			<input type="submit" class="btn btn-lg btn-success" value="Buscar">
		</form>
		
	</div>
</div>

<h2 style="margin-left: 250px;">Ofertas de Trabajo</h2>

<?php foreach ($trabajos as $trabajo): ?>

	<div class="main">
		<h2><?php echo $trabajo->titulo_trabajo; ?></h2>
		<h5><?php echo $trabajo->ubicacion; ?></h5>
		<small><?php echo $trabajo->fecha; ?></small>
		<p><?php echo $trabajo->descripcion; ?></p>
		<div>
			<a href="trabajo.php?id=<?php echo $trabajo->id; ?>" class="button4" style="background-color:#4e9af1"><i class="far fa-eye"></i></a>
		</div>
		<br>
	</div>
	<hr class="hrp">

<?php endforeach ?>



<?php include 'inc/footer.php';?>