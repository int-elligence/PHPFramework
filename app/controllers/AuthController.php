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
	public function post()
	{
		$name = Input::get('name');

		$variables = array(
			'name'=>$name
		);
		$this->renderView("afterPost", $variables);
	}
}