<?php

class Input 
{
	public static function get($name)
	{
		return $_REQUEST[$name];
	}
	public static function all()
	{
		return $_POST;
	}
}