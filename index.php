<?php include_once 'config/init.php';?>

<?php 
$trabajo = new Trabajo;
$plantilla = new Plantilla ('plantillas-paginas/pagina-inicio.php');

//Mostrar las ofertas de trabajo dependiendo de la categoria.
$categoria = isset($_GET['categoria']) ? $_GET['categoria']: null;

if ($categoria) {
	$plantilla->trabajos = $trabajo->getXCategoria($categoria);
}else {
	$plantilla->trabajos = $trabajo->getAllTrabajos();
}

$plantilla->categorias = $trabajo->getCategorias();

echo $plantilla;