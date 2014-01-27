<?php

class MainController 
{

	protected $view;
	protected $variables;
	public function __construct()
	{
		$this->variables = array();
	}
	public function renderView($view, $variables=array())
	{
		foreach ($variables as $var_name=>$value)
		{	
			$$var_name = $value;
		}
		if (file_exists("../app/views/$view.php"))
		{
			include "../app/views/$view.php";
		}
		else {
			// Enter your view not found page here...
			echo 'View not found';
			die();
		}
	}
	public function redirect($controllerAction)
	{

		global $route;
		include "../index.php";
		// Find the Route associated with the Controller
		$url = WEBROOT.$route->searchByControllerAction($controllerAction);

		header("location: $url");
		/*
		$controllerAction = explode('@', $controllerAction);
		$controller = $controllerAction[0];
		$action = $controllerAction[1];
		if (class_exists($controller))
		{
			$controller = new $controller;
			$controller->$action();
		}
		else {
			include "../app/controllers/$controller.php";
			$controller = new $controller;
			$controller->$action();
		}
		*/

	}
}