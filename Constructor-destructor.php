<?php

	class Loteria{


		//Atributos
		public $numero;
		public $intentos;
		public $resultado = false;

		//Metodo - Constructor

		public function __construct($numero,$intentos){
			$this ->numero = $numero;
			$this ->intentos = $intentos;

		}

		//Metodos

		public function sortear(){
			$minimo = $this ->numero /2;
			$maximo = $this ->numero *2;
			for($i = 0; $i < $this ->intentos;i++;){
				$int = rand($minimo,$maximo);
				//Llamamos al metodo intentos
				self::intentos($int);		

		}

		}

		public function intentos($int){
			if($int == $this ->numero){
				echo "<b>".$int." ==".$this->numero."</b><br>";
				$this ->resultado = true;
			}
			else{
				echo $int." != ".$this->numero."<br>";}


		}

		//Metodo - Destructor
		public function __destruct(){
			if($this->resultado){
				echo "Ganastes!!".$this->intentos." Intentos";
			}

			else{
				echo "Perdistes :(".$this->intentos." Intentos";
			}	


		}

	}


//Creacion del objeto (Instancia)

$loteria = new Loteria(8,12);
$loteria->sortear();







?>