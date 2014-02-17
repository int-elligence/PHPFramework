<?php

class Redirect
{
	public static function action($controllerAction)
	{
		global $route;
		$redirectURI = array_search($controllerAction, $route->routes);
		$redirectURI = WEBROOT.$redirectURI;
		header("Location: $redirectURI");
	}
}