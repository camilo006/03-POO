<?php namespace Models;

	Class seccion{

		//Atributos

		private $id;
		private $nombre;
		private $con;

		//Metodos
		public function __construct(){

				$this->con = new Conexion();

		}

		//Creamos el Set
		public function set($atributo,$contenido){
		
			//Llamamos a $atributo y le pasamos el contenido que queremos
			$this->atributo->contenido;
		}

		//Creamos el Get
		public function get($atributo){
			//Retornamos el atrubuto que queremos mostrar, el cual lo contiene $atributo
			
			return $this->$atributo;

		}

		//Creamor Registrar
		public function add(){
			$sql = "INSERT INTO secciones(id,nombre) VALUES (null,'{$this->nombre}')";
			$this->con->consultaSimple($sql);
		}

		//Creamos Listar todo
		public function listar(){

			$sql = "SELECT * FROM secciones";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}

		//Creamos Borrar
		public function delete(){

			$sql = "DELETE FROM secciones WHERE id ='{$this->id}'";
			$this->con->consultaSimple($sql);

		}
		//Creamos Actualizar
		public function edit(){

			$sql = "UPDATE  secciones set nombre = '{$this->nombre}' WHERE id = '{$this->id}'";
			$this->con->consultaSimple($sql);
		}

		public function view(){

			$sql = "SELECT * FROM secciones WHERE id = '{$this->id}'";
			$datos = $this->con->consultaRetorno($sql);

			//Mostrar en forma de Arreglo
			$row = mysqli_fetch_assoc($datos);
			return $row;

		}


	}


?>