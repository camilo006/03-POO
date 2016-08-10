<?php
//Rutas dinamicas-url amigables (.Htaccess)

define ('DS',DIRECTORY_SEPARATOR);
define ('ROOT',realpath(dirname(__FILE__)) . DS );

//Autoload
require_once "Config/Autoload.php";

//Llamamos  a la clase y ejecutamos el metodo run

config\Autoload::run();

?>