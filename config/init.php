<?php 
//Inicio de sesión.
session_start();

require_once 'config.php';

//Incluimos el archivo de notificaciones para la aplicación
require_once 'sistema/notificacion.php';

//Autocargador de clases
spl_autoload_register (function ($class_name){
	require_once 'libreria/'.$class_name.'.php';
});