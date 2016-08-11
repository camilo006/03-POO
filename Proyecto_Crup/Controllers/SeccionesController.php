<?php namespace Controllers;

	use Models\seccion as Seccion;

	class seccionesController{

		//Atributos
		private $secciones;

		//Metodos

		public function __construct(){

		$this->secciones = new Seccion();

		}

		public function index(){

				$datos = $this->secciones->listar();
				return $datos;
		}

	}


	?>