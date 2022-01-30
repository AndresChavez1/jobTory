<?php include_once 'config/init.php';?>

<?php 
$trabajo = new Trabajo;

if (isset($_POST['del_id'])) {
	$del_id = $_POST['del_id'];
	if ($trabajo->eliminar($del_id)) {
		redirect('index.php', 'Trabajo eliminado', 'success');
	}else{
		redirect('index.php', 'Trabajo no eliminado', 'error');
	}
}

$plantilla = new Plantilla ('plantillas-paginas/trabajo-pagina.php');

//Mostrar las ofertas de trabajo dependiendo de la categoria.
$trabajo_id = isset($_GET['id']) ? $_GET['id']: null;


$plantilla->trabajo = $trabajo->getTrabajo($trabajo_id);

echo $plantilla;