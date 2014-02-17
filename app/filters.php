<?php

class Filter
{
	public static function auth()
	{
		if (!Auth::check())
		{
			// Enter your URL redirect if the User Authentication failed
		}
		else
		{
			// If your Authentication worked, enter your 
			// stuff here
			
		}
	}
}