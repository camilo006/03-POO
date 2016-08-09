<?php namespace Models;

	class Conexion{

	//Atributos

		private $datos = array(
			"host" => "localhost",
			"user" => "root",
			"pw" => "",
			"db" => "Crúp_php"
			);

	/*-Mysqli->Mejora de Mysql	
	 -Atributo que contiene nuestra conexion $con (<--Encapsulamos).	
	*/
	
	private $con;	

	//Metodos

	public function __construct(){

	//Instancia
	//$this->con=$con	

	$this->con = new \mysqli($this->datos['host'],$this->datos['user'],$this->datos['pw'],
		$this->datos['db']);	


	}
	
	public function consultaSimple($sql){

	//Llamamos a $con, ejecutamos query, parametros

		$this->con->query($sql);

	}

	public function ConsultaRetorno($sql){

	//Devolver la consulta

		$datos = this->con->query($ql)
		return $datos;
	}





	}








?>