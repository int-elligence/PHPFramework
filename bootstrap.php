<?php

// Define the Document Root

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)).'/framework');

// Include the MainController so extends works
include "app/controllers/MainController.php";
//include(ROOT . DS . 'app' . DS . 'controllers' . DS . 'MainController.php');
