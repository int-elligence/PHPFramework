<?php

/* Define the Routes */

class Route
{
	protected $routes = array();
	public function add($route, $action)
	{
		$this->routes[$route] = $action;
		return true;
	}
	public function getRoute($uri)
	{
		return $this->routes[$uri];
	}
}

$route = new Route;

$route->add('/', 'Array@index');
$route->add('/home', 'AuthController@home');
