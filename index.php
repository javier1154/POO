<?php 
	
	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', realpath(dirname(__FILE__)).DS);
	define('URL', "http://localhost/POO/");

	ob_start();

	include "Config/Autoload.php";
	Config\Autoload::run();
	include "Views/template.php";
	Config\Enrutador::run(new Config\Request());


?>