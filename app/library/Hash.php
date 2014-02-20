<?php

class Hash
{
	public static function make($value)
	{
		return hash('sha256', 'PioneerPHP'.$value);
	}
}