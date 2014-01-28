<?php
class Form
{
	public static function required($variable)
	{
		if (is_array($variable))
		{
			foreach($variable as $variable)
			{
				if (empty($variable))
				{
					header('Location: '.$_SERVER['HTTP_REFERER']);
				}
			}
		}
		if (empty($variable))
		{
			header('Location: '.$_SERVER['HTTP_REFERER']);
		}
	}
}

?>