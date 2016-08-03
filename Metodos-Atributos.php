<?php

	class Persona{

	//Atributos
		public $nombre = array();
		public $apellido = array();

	//Metodos

	public function guardar($nombre,$apellido){
		$this->nombre[]=$nombre;
		$this->apellido[]=$apellido;
	}

	public function mostrar($nombre,$apellido){
		for ($i=0; $i < count($this->nombre); $i++) { 
			//Llamamos a la funcion formato
			self::formato($this->nombre[$i],$this->apellido[$i]);
		}
	}

	public function formato($nombre,$apellido){
		echo "Nombre: ".$nombre." | "." apellido: ".$apellido."<br>";

	}

	}

	//Creacion del objeto(instancia)
	$Persona = new Persona();
	$Persona->guardar("Camilo","Nuñez");
	$Persona->guardar("Valeria","Nuñez")
	$Persona->mostrar();
?>