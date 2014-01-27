<?php

class Input 
{
	public static function get($name)
	{
		return $_POST[$name];
	}
}