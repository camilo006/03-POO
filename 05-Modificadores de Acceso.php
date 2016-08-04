<?php

	class Facebook{


		//Atributos
		public $nombre;
		public $edad;
		private $pass;
		//public $pass;

		//Metodo -Constructor
		public function __construct($nombre,$edad,$pass){

			$this->nombre = $nombre;
			$this->edad = $edad;
			$this->pass = $pass;
		}

		//Metodos

		public function verInformacion(){
			echo "Nombre".$this->nombre."<br>";
			echo "edad".$this->edad."<br>";
			//Llamamos la funcion cambiarPass
			self::cambiarPass("54321");
			echo "password".$this->pass."<br>";
		}

		public function cambiarPass($pass){
			this->pass = $pass;
		}

	}

//Creacion objeto(instancia)

facebook = new Facebook("Camilo",20,"1234");
$facebook->verInformacion();
//facebook->$pass;
//facebook->cambiarPass("55555");

?>