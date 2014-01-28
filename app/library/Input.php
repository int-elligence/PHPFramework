<?php

class Input 
{
	public static function get($name)
	{
		return $_POST[$name];
	}
	public static function all()
	{
		return $_POST;
	}
}