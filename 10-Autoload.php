<?php

 
function autoload($clase){

	//Direccion donde se encuentran las clases que vamos a llamar

	include "clases/".$clase."php";
}


spl_autoload_register('autoload');

//Llamamos a la clase persona, Esta funcion tambien permite llamar varias clases


Persona::imprimir(" :) ");
Auto::imprimit("Auto encendido");


?>