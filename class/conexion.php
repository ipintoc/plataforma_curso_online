<?php

class Conexion{

	private $host = "localhost";  //estos datos varian segun el servidor 
	private $user = "root";       //estos datos varian segun el usuario configurado 
	private $pass = "";           //estos datos varian segun la clave configurada 
	private $db = "cursos_online";//estos datos varian segun el nombre de la BD que se asigne
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


?>