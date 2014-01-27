<?php

// Define the Document Root

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)).'/framework');

// Include the MainController so extends works
include "app/controllers/MainController.php";
//include(ROOT . DS . 'app' . DS . 'controllers' . DS . 'MainController.php');

// Define the root URL

require "app/library/Route.php";

// define the url() function, so url's can be made in views

function url($page)
{
	//Define the URL function here/
}