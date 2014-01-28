<?php

// READ:::
// This is Procedural MySQLi for Now, Chill tho.  It'll be changed

class DB
{
	protected $connect;

	public function __construct()
	{
		include '../app/config/database.php';
		$host = $mysqli['host'];
		$user = $mysqli['user'];
		$password = $mysqli['password'];
		$database = $mysqli['database'];
		$this->connect = mysqli_connect($host, $user, $password, $database) or die('Could not connect to the database');

		$this->yo = 'hr';
	}
}