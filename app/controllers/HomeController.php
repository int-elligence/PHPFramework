<?php

class HomeController extends MainController
{
	public function home()
	{
		return $this->renderView("welcome");
	}

}