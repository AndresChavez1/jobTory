<?php 
//Redireccionar a la página principal
function redirect($pagina = FALSE, $mensaje = NULL, $tipo_mensaje = NULL){
	if (is_string($pagina)) {
		$ubicacion = $pagina;
	}else{
		$ubicacion = $_SERVER ['SCRIPT_NAME'];
	}

	if ($mensaje != NULL) {
		$_SESSION['mensaje'] = $mensaje;
	}

	if ($tipo_mensaje != NULL) {
		$_SESSION['tipo_mensaje'] = $tipo_mensaje;
	}

	//Redireccionar
	header ('Ubicacion: '.$ubicacion);
	exit;
}

//Monstrar mensaje

function mostrarMensaje(){
	if (!empty($_SESSION['mensaje'])) {
		
		//Asignamos a la variable mensaje
		$mensaje = $_SESSION['mensaje'];

		if (!empty($_SESSION['tipo_mensaje'])) {
			$tipo_mensaje = $_SESSION['tipo_mensaje'];
			//Salida del mensaje
			if ($tipo_mensaje == 'error') {
				echo '<div class="alert alert-danger">' . $mensaje . '</div>';

			}else{
				echo '<div class="alert alert-success">' . $mensaje . '</div>';
			}
		}
		//Eliminamos  variable del arreglo
		unset($_SESSION['mensaje']);
		unset($_SESSION['tipo_mensaje']);
	}else{
		echo '';
	}
}

