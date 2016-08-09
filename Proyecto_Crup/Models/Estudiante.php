<?php namespace Models;

class Estudiante{

//Atributos

		private $id;
		private $nombre;
		private $edad;
		private $promedio;
		private $imagen
		private $id_seccion;
		private $fecha;
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


		//Creamos  Listar todo 
		public function listar(){

			$sql = "SELECT t1.*,t2.nombre as Nombre_seccion FROM estudiantes t1 INNER JOIN secciones t2 
			ON t1.id_seccion = t2.id";

			//Llamamos a $con le pedimos que ejecute el metodo consultaRetorno, parametros.
			 

			$datos = $this->con->consultaRetorno($sql);
			return $datos;

		}


		//Creamos  Registrar
		//NOW:Fecha actual
		public function add(){

			$sql = "INSERT INTO estudiantes (id,nombre,edad,imagen,id_seccion,fecha) 
			VALUES (null,'{$this->nombre}','{$this->edad}','{$this->promedio}','{$this->imagen}',
			'{$this->id_seccion}', NOW())";

			//Llamamos a $con le pedimos que ejecute el metodo consultaSimple, parametros
			   

			 $this->con->consultaSimple($sql);


		}

		//Creamos Borrar
		public function borrar(){

			$sql = "DELETE FROM estudiantes WHERE id='{$this->id}'";

			//Llamamos a $con le pedimos que ejecute el metodo consultaSimple, parametros

			$this->con->consultaSimple($sql);

		}
		
		//Creamos Actualizar
		public function edit(){

			$sql = "UPDATE FROM estudiantes set nombre = '{$this->nombre}', edad = '{$this->edad}',
			promedio = '{$this->promedio}', id_seccion = '{$this->id_seccion}' WHERE id ='{$this->id}'";

			//Llamamos a $con le pedimos que ejecute el metodo consultaSimple, parametros

			$this->con->consultaSimple($sql);

		}

		//Creamos ver uno por uno
		public function view(){

			$sql ="SELECT t1.*,t2.nombre as Nombre_seccion FROM estudiantes t1 INNER JOIN secciones t2 
			ON t1.id_seccion = t2.id WHERE id = '{$this->id}'";

			//Llamamos a $con le pedimos que ejecute el metodo consultaRetorno, parametros.

			$datos = $this->con->consultaRetorno($sql);
			
			//Mostrar en forma de  Arreglo
			
			$row = mysqli_fetch_assoc($datos);
			
			return $row;


		}


}










?>