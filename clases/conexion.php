<?php  

class conexion {

	private $host = 'localhost';
	private $dbname = 'myndb';
	private $user = 'root';
	private $password = '';

	public function __construct () 
	{}#para que no se le pasen parametros

	static function conectar() 
	{
	$pdo = new PDO("mysql:host=localhost;dbname=myndb","root",""); 
	return $pdo ;
	}
	
}