<?php

 interface Auto{

 	public function encender();
 	public function apagar();
 }


 interface Gasolina extends Auto{

 	public function vaciarTanque();
 	public function llenarTanque($cant);
}
//Implementamos una interface en nuestra clase 
 
 class Deportivo implements Gasolina {

 //Atributos

 	private $estado = false;
 	private $tanque = 0;

 //Metodos	

 	public function estado(){

 	//this->estado es igual a $this->estado == true

 		if($this->estado){
 			
 			print "El Auto esta encendido y tiene ".$this->tanque." litros de gasolina ";
 		
 		} else {

 			print "El Auto esta apagado";
 		}



 	}


//La clase debe contener todos los metodos de la interface
 	
 	public function encender(){

 		if($this->estado){

 		print "No pudes encender el Auto dos veces <br>";	

 		} else { 
 			if($this->tanque <= 0){

 			print "No se puede encender el Auto, no hay gasolina :( <br>";
 		}

 		}	else{
 			print "Auto Encendido <br>";
 		}
 	}
 	public function apagar(){

 		if($this->estado){
 			print "Auto apagado <br>";
 			$this->estado = false;
 		} else {
 			print "Auto ya esta apagado <br>";
 			 
 		}

 	}

 	public function vaciarTanque(){

 		$this->tanque = 0;

 	}
 	public function llenarTanque($cant){

 		$this->tanque = $cant;

 	}

 // + Metodos
 	public function usar($km){

 	if($this->estado){

 		$reducir = $km/3;
 		$this->tanque = $this tanque - $reducir;
 		if(this->tanque <= 0){
 			$this->estado = false;
 		}


 	} else {
 		print "El auto esta apagado, no se puede usar <br>";
 		}

 	}

 }

//Instancia

 $carro = new Deportivo();

 //Llamamos los Metodos
 $carro->llenarTanque(100);
 $carro->encender();
 $carro->usar(500);
 $carro->estado();



 
 		





















?>