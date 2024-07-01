<?php

class Conexion{

	private $host = "localhost";
	private $user = "root";
	private $pass = "";
	private $db = "cursos_online";
	private $connect ;

	public function __construct(){

		$connectionString="mysql:hos=".$this->host.";dbname=".$this->db.";charset=utf8";
		try {
			$this->connect = new PDO($connectionString,$this->user,$this->pass);
			$this->connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			//echo "Conexion Exitosa";
		} catch (Exception $e) {
			$this->connect = "Error de conexion";
			echo "Error ". $e->getMessage();
			
		}
	}
	public function connect(){

		return $this->connect;
	}
}

//$conect= new Conexion();
?>