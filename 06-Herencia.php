<?php

	class Vehiculo{

		//Atributos
		public $motor = false;
		public $marca;
		public $color;

		//Metodos

		public function estado(){

			if($this->motor ==true){
				echo "El motor esta encendido";
			} else{
				echo "El motor esta apagado";
			}
		}

		public function encender(){

			if($this->motor==true){
				echo "Precaucion, el motor esta encendido";
			}	else{
				echo "El motor ahora esta encendido";
			}


		}

	}

// 1-(Herencia)

	class Moto extends Vehiculo{

		//Atributos

		//Metodos

		public function estadoMoto{
			self::estado();
		}
	}

//(Instancia)
	
	$moto = new Moto();
	//$moto->estado();
	$moto->estadoMoto();

//2-(Herencia)	
	class Cuatrimoto extends Moto{
		//Atributos
		//Metodos
	}
	moto = new Cuatrimoto();
	$moto->estadoMoto();

?>