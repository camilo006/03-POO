<?php

class Pagina{

//Atributos
public $nombre = "krato's";
public static $url = "https://camilo006.github.io/portafolio/";

//Metodos

public function informacion(){

	/*Nota->para llamar a un atributo de tipo static es necesario usar '::' 
	con la palabra reservada self o el nombre de la clase */
	echo "Bienvenidos a <b>".$this->$nombre."</b>"."Nuestro portafolio es: ".self::$url;
}

public function static informacion2(){

	/*Nota-> no podemos llamar public en un static porque no lo lee
			ejemplo:
			echo "Bienvenidos".self::$nombre; */

	echo "Bienvenidos".self::$url;
}




}

//Instancia normal

$pagina = new Pagina();
$pagina->informacion();

//podemos llamar los Atributos/metodos sin instanciar solo con el nombre de la clase

pagina::informacion2();

//Podemos hacer Herencia

class Web extends Pagina{

}

//Instancia

Web::informacion2();



?>