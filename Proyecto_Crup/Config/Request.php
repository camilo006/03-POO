<?php namespace Config;

class Request{

	//Atributos
	private $controlador;
	private $metodo;
	private $argumento;

	//Metodos

	public function __construct(){
	//Validacion (si existe la variable 'url' ubicada  en el htacces)
	if(isset($_GET['url'])){

		$ruta = filter_input(INPUT GET,'url',FILTER_SANITIZE_URL);
		$ruta = explode("/", $ruta);
		$ruta = array_filter($ruta);

		if($ruta[0] == "index.php"){

				$this->controlador = "estudiantes";
		}else{
				$this->controlador = strtolower(array_shift($ruta));
		}

		$this->metodo = strtolower(array_shift($ruta));

		if(!$this->metodo){
			$this->metodo = "index";
				}
		$this->argumento = $ruta;


			}else{
				$this->controlador = "estudiantes";
				$this->metodo = "index";
			}


		}

		public function getControlador(){

			return $this->controlador;
		}

		public function getMetodo(){
			return $this->metodo;

		}

		public function getArgumento(){

			return $this->argumento;
		}



}

?>