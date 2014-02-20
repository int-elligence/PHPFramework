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
	public static function login($email, $password)
	{
		$password = Hash::make($password);
		$user = DB::raw("SELECT * FROM users WHERE email='$email' AND password='$password'");
		var_dump($user);
	}
	public static function getUser()
	{
		if (!isset($_SESSION['id']))
		{
			// The user is not logged in, return false
			return false;
		}
		// the user is logged in, return the user object
		$id = $_SESSION['id'];
		return User::find($id);
	}
}