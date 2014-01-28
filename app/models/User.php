<?php

class User extends DB
{
	protected $table;

	public function __construct()
	{
		$query = mysqli_query($this->connect, "SELECT * FROM users");
	}
}