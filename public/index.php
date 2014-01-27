<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

require "../app/routes.php";

// Let's add a / to the beginning of the $_GET['url']

$_GET['url'] = '/'.$_GET['url'];

// Get rid of the / at the end of the URL to add flexibility...  

$_GET['url'] = rtrim($_GET['url'], '/');

// Returns the controller and the action separated by @
$controllerAction = explode('@', $route->getRoute($_GET['url']));

//Explode the controller action to get the Controller and the Action it is referencing

$controller = $controllerAction[0];

$action = $controllerAction[1];

echo "This is referencing ". $controller.' at '.$action;