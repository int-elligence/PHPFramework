<?php

class MainController 
{

	protected $view;
	protected $variables;
	public function __construct()
	{
		$this->variables = array();
	}
	public function renderView($view)
	{
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
}