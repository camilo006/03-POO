<?php
//Rutas dinamicas-url amigables (.Htaccess)

define ('DS',DIRECTORY_SEPARATOR);
define ('ROOT',realpath(dirname(__FILE__)) . DS );
define('URL',"http://localhost/Proyecto_Crup");

//Autoload
require_once "Config/Autoload.php";

//Llamamos  a la clase y ejecutamos el metodo run

config\Autoload::run();
require_once "Views/template.php";
Config\Enrutador::run(new Config\Request());
?>