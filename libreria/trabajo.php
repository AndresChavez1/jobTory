<?php 

class Trabajo{
	private $db;
	//Constructor
	public function __construct(){
		$this->db = new Database;
	}

	//Get todos Trabajos
	public function getAllTrabajos(){
		$this->db->query("SELECT trabajos.*, categorias.categoria AS ccategoria
			FROM trabajos
			INNER JOIN categorias 
			ON trabajos.id_categoria = categorias.id
			ORDER BY fecha DESC
			");
		//Asignamos los resultados
		$resultados =$this->db->setResultado();
		return $resultados;
	}

	//Get de las categorias
	public function getCategorias(){
		$this->db->query("SELECT * FROM categorias");

		$resultados =$this->db->setResultado();
		return $resultados;
	}
	//Get de trabajos por categoria
	public function getXCategoria($categoria){
		$this->db->query("SELECT trabajos.*, categorias.categoria AS ccategoria
			FROM trabajos
			INNER JOIN categorias 
			ON trabajos.id_categoria = categorias.id
			WHERE trabajos.id_categoria = $categoria
			ORDER BY fecha DESC
			");

		$resultados =$this->db->setResultado();
		return $resultados;
	}
	//Get categoria
	public function getCategoria($categoria){
		$this->db->query("SELECT * FROM categorias WHERE id = :id_categoria");

		$this->db->bind(':categoria_id', $id_categoria);

		$row = $this->db->single();

		return $row;
	}

	//Get trabajo
	public function getTrabajo($id){
		$this->db->query("SELECT * FROM trabajos WHERE id = :id");

		$this->db->bind(':id', $id);

		$row = $this->db->single();	

		return $row;
	}

	//Crear Trabajo

	public function crear($data){
		//Insertar Query
		$this->db->query("INSERT INTO trabajos (id_categoria, titulo_trabajo, empresa, descripcion, ubicacion, salario, contacto_usuario, contacto_email)
			VALUES (:id_categoria, :titulo_trabajo, :empresa, :descripcion, :ubicacion, :salario, :contacto_usuario, :contacto_email)");

		//Vincular valores
		$this->db->bind(':id_categoria', $data['id_categoria']);
		$this->db->bind(':titulo_trabajo', $data['titulo_trabajo']);
		$this->db->bind(':empresa', $data['empresa']);
		$this->db->bind(':descripcion', $data['descripcion']);
		$this->db->bind(':ubicacion', $data['ubicacion']);
		$this->db->bind(':salario', $data['salario']);
		$this->db->bind(':contacto_usuario', $data['contacto_usuario']);
		$this->db->bind(':contacto_email', $data['contacto_email']);
		
		//Ejecutar
		if ($this->db->execute()) {
			return true;
		}else{
			return false;
		}
	}

	//Eliminar trabajo

	public function eliminar($id){
		//Insertar Query
		$this->db->query("DELETE FROM trabajos WHERE id = $id");
		
		//Ejecutar
		if ($this->db->execute()) {
			return true;
		}else{
			return false;
		}
	}

	//Editar trabajo
	public function editar($id, $data){
		//Insertar Query
		$this->db->query("UPDATE trabajos
			SET
			id_categoria = :id_categoria,
			titulo_trabajo = :titulo_trabajo,
			empresa = :empresa,
			descripcion = :descripcion,
			ubicacion = :ubicacion,
			salario = :salario,
			contacto_usuario = :contacto_usuario,
			contacto_email = :contacto_email
			WHERE id = $id");

		//Vincular valores
		$this->db->bind(':id_categoria', $data['id_categoria']);
		$this->db->bind(':titulo_trabajo', $data['titulo_trabajo']);
		$this->db->bind(':empresa', $data['empresa']);
		$this->db->bind(':descripcion', $data['descripcion']);
		$this->db->bind(':ubicacion', $data['ubicacion']);
		$this->db->bind(':salario', $data['salario']);
		$this->db->bind(':contacto_usuario', $data['contacto_usuario']);
		$this->db->bind(':contacto_email', $data['contacto_email']);
		
		//Ejecutar
		if ($this->db->execute()) {
			return true;
		}else{
			return false;
		}
	}
}