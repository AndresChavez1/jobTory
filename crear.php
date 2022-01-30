<?php include_once 'config/init.php';?>

<?php 
$trabajo = new Trabajo;

if (isset($_POST['submit'])) {
	//Arreglo de datos.
	$data = array();
	$data['titulo_trabajo'] = $_POST['titulo_trabajo'];
	$data['empresa'] = $_POST['empresa'];
	$data['id_categoria'] = $_POST['categoria'];
	$data['descripcion'] = $_POST['descripcion'];
	$data['ubicacion'] = $_POST['ubicacion'];
	$data['salario'] = $_POST['salario'];
	$data['contacto_usuario'] = $_POST['contacto_usuario'];
	$data['contacto_email'] = $_POST['contacto_email'];

	if ($trabajo->crear($data)) {
		redirect('index.php', 'Tu oferta de trabajo ha sido registrada', 'success');

	}else{
		redirect('index.php', 'Algo salio mal', 'error');
	}

}
$plantilla = new Plantilla ('plantillas-paginas/oferta-trabajo.php');

$plantilla->categorias = $trabajo->getCategorias();

echo $plantilla;