<?php class Plantilla{
	//Ruta a las plantillas de las páginas
	protected $plantilla;

	//Variables que pasamos
	protected $datos = array();

	//Método constructor
	public function __construct($plantilla){
		$this->plantilla = $plantilla;
	}

	//Método get para obtener las variables de la plantilla
	public function __get($key){
		return $this->datos[$key];
	}

	//Método set para enviar los valores.
	public function __set($key, $value){
		$this->datos[$key] = $value;
	}

	public function __toString(){
		extract($this->datos);
		chdir(dirname($this->plantilla));
		ob_start();

		include basename($this->plantilla);

		return ob_get_clean();
	}

}