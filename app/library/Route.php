<?php

class Route
{
	protected $routes = array();
	public function add($route, $action)
	{
		$route = rtrim($route, '/');
		$this->routes[$route] = $action;
		return true;
	}
	public function getRoute($uri)
	{
		return $this->routes[$uri];
	}
	public function searchByControllerAction($controllerAction)
	{
		return array_search($controllerAction, $this->routes);
	}
}

$route = new Route;
