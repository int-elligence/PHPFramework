<?php

class AuthController extends MainController 
{
	public function test()
	{
		$db = new DB;
		$this->renderView("hello");
	}
	public function home()
	{
		$this->redirect("AuthController@test");
	}
	public function post()
	{
		Form::required(Input::all());
		$variables = array(
			'name'=>Input::get('name')
		);
		$this->renderView("afterPost", $variables);
	}
	public function many()
	{
		$db = new DB;
		$user = new User;
	}
}