<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);



// Require the bootstrapper

require "../bootstrap.php";

require "../app/routes.php";

require "../app/config/config.php";

// Include all the models

foreach (glob("../app/models/*.php") as $file)
{
	include $file;
}

function action($controllerAction)
{
	global $route;
	return WEBROOT.$route->searchByControllerAction($controllerAction);
}

// Let's add a / to the beginning of the $_GET['url']

$_GET['url'] = '/'.$_GET['url'];

// Get rid of the / at the end of the URL to add flexibility...  

$_GET['url'] = rtrim($_GET['url'], '/');

// Returns the controller and the action separated by @
$controllerAction = explode('@', $route->getRoute($_GET['url']));

//Explode the controller action to get the Controller and the Action it is referencing

$controller = $controllerAction[0];

$action = $controllerAction[1];

// Include the appropriate controller
//print(ROOT . DS . 'app' . DS . 'controllers' . DS . $controller . '.php') or die('could not include');
include("../app/controllers/$controller.php");

$controller = new $controller;
$controller->$action();

