<?php
	
	//Llamar a la clase de conexión
	require 'providers/Database.php';

	//Incializa variable con el nombre del controlador incial a usar.
	$controller = 'HomeController';


	if(!isset($_REQUEST['controller'])) {
		//Llamado a controlador inicial
		require "controllers/".$controller.".php";

		$controller = ucwords($controller);
		// se realiza la Instancia
		$controller = new $controller;
		$controller->index();
	} else {

		//Obtener el controlador a tramitar
		$controller = ucwords($_REQUEST['controller'].'Controller');
		//Obtener el metodo a tramitar
		$method = isset($_REQUEST['method']) ? $_REQUEST['method'] : "index";

		//Llamado a controlador requerido
		require "controllers/".$controller.".php";
		// se realiza la Instancia
		$controller = new $controller;

		//Hacer llamdo al metodo solicitado
		call_user_func(array($controller, $method));
	}