<?php  

class conexion {

	private $host = 'localhost';
	private $dbname = 'myndb';
	private $user = 'root';
	private $password = '';

	public function __construct () 
	{

	}

	static function conectar() 
	{
	$pdo = new PDO("mysql:host=localhost;dbname=myn_indumentaria","root",""); 
	return $pdo ;
	}
	
}