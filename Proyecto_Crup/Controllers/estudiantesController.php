<?php namespace Controlles;

	use Models\Estudiante as Estudiante;

	class estudiantesController{

		private $estudiante;

//Metodos

		public function __construct(){

			$this->estudiante = new Estudiante();
		}


		public function index(){

			$datos = $this->estudiante->listar();
			return $datos;

		}

	}
	
	$estudiantes = new estudiantesController();

?>