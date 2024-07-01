<?php

require_once("autoload.php");

class Usuario extends Conexion{

	private $strNombre;
	private $strEmail;
	private $strPass;
	private $conexion;

	public function __construct(){

		$this->conexion= new Conexion();
		$this->conexion = $this->conexion->connect();
	}

	public function InsertUsuario(string $nombre,string $email,string $pass){

		$this->strNombre=$nombre;
		$this->strEmail=$email;
		$this->strPass=$pass;

		$sql="INSERT INTO usuarios(nombre,correo,clave) VALUES (?,?,MD5(?))";
		$insert = $this->conexion->prepare($sql);
		$arrData = array($this->strNombre,$this->strEmail,$this->strPass);
		$resInsert = $insert->execute($arrData);
		$idInsert = $this->conexion->lastInsertId();
		//return $idInsert;
	}

	public function getMail(string $email){

		
		$this->strEmail=$email;
		

		$sql="SELECT count(*) total FROM usuarios where correo='$email'";
		$select = $this->conexion->query($sql);
		$result= $select->fetch()['total'];
		return $result;
	}

	public function login(string $email,string $pass){

		
		$this->strEmail=$email;
		$this->strPass=$pass;

		$sql="SELECT nombre FROM usuarios where correo='$email' and clave=MD5('$pass')";
		$select = $this->conexion->query($sql);
		$result= $select->fetch()['nombre'];
		return $result;
	}
}

?>