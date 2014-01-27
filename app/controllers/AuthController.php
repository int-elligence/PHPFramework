<?php

class AuthController extends MainController 
{
	public function test()
	{
		$this->renderView("hello");
	}
	public function home()
	{
		$this->redirect("AuthController@test");
	}
}