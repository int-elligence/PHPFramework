<?php

// Define the Document Root

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)).'/framework');

require "app/library/Controllers/MainController.php";
require "app/library/Models/DB.php";

// Require The Library dependencies 
require "app/library/Hash.php";
require "app/library/Route.php";
require "app/library/Input.php";
require "app/library/Form.php";
require "app/library/Session.php";
require "app/library/Auth.php";
require "app/library/Redirect.php";
require "app/filters.php";


// define the url() function, so url's can be made in views

function url($page)
{
	//Define the URL function here/
	echo WEBROOT.'/'.$page;
}