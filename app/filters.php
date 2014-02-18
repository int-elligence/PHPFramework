<?php

class Filter
{
	public static function auth()
	{
		if (!Auth::check())
		{
			// Enter your Action redirect if the User Authentication failed
			Redirect::action("HomeController@home");
		}
		else
		{
			// If your Authentication worked, you can opt
			// to enter your stuff here	
		}
	}
}