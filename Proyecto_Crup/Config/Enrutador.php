<?php namespace Config

	class Enrutador{

		//Atributos

		//Metodos

		public static function run(Request $Request){
		$controlador = $request->getControlador() . "Controller";
		
		//Creacion de la ruta
		$ruta = ROOT . "Controllers" .DS .$controlador.".php";
		$metodo = $request->getMetodo();

		if($metodo == "index.php"){
			$metodo = "index";
		}

		$argumento = $request->getArgumento();

		//Si podemos leer archivo entonces accedemos
		if(is_readable($ruta)){
			require_once $ruta;
			$mostrar = "Controllers\\".$controlador;
			$controlador = new $mostrar;

			//Si no existe $argumento
			if(!isset($argumento)){
				call_user_func(array($controlador,$metodo));

			}else { 
			//Si el metodo existe
				call_user_func_array($controlador, $metodo),$argumento);	

			}
		}





		}

	}



?>