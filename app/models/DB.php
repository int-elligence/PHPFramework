<?php

// PDO based Database Class
include "../app/config/database.php";
$host = $dbCreds['host'];
$userN = $dbCreds['user'];
$pass = $dbCreds['password'];
$database = $dbCreds['database'];

try 
{
	$conn = new PDO('mysql:host='.$host.';dbname='.$database, $userN, $pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) 
{
	echo "DATABASE ERROR: ".$e->getMessage();
}

class DB
{
	public $connect;
	public function __construct()
	{
	
	}
	public static function all($table = NULL)
	{
		$class = get_called_class();
		if ($class == "DB")
		{
			$class = $table;
		}
		$$class = new $class;
		$table = $$class->table;
		global $conn;

		$stmt = $conn->prepare('SELECT * FROM '.$table.' WHERE 1');
		$stmt->execute();
		$returnArray = [];
		
		$result = $stmt->fetchAll(PDO::FETCH_OBJ);
		
		return $result;
	}
	public static function where($column, $operator, $value)
	{
		$class = get_called_class();
		$$class = new $class;
		$table = $$class->table;
		global $conn;

		$stmt = $conn->prepare('SELECT * FROM `'.$table.'` WHERE `'.$column.'`'.$operator.$value);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_OBJ);
		return $result;
	}
	public static function raw($query)
	{
		global $conn;
		$stmt = $conn->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_OBJ);

		return $result;
	}
}