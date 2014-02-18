<?php

class Auth
{
	public static function check()
	{
		if (isset($_SESSION['id']))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public static function logout()
	{
		unset($_SESSION['id']);
	}
	public static function login($userObject)
	{
		$id = $userObject[0]->id;
		$_SESSION['id'] = $id;
	}
	public static function getUser()
	{
		$id = $_SESSION['id'];
	}
}