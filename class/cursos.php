<?php

require_once("autoload.php");

class Cursos extends Conexion{

	private $strTitulo;
	private $strDesc;
	private $strEstado;
	private $strCreador;
	private $conexion;

	public function __construct(){

		$this->conexion= new Conexion();
		$this->conexion = $this->conexion->connect();
	}

	public function InsertCurso(string $titulo,string $desc,string $estado,string $creador){

		$this->strTitulo=$titulo;
		$this->strDesc=$desc;
		$this->strEstado=$estado;
		$this->strCreador=$creador;

		$sql="INSERT INTO cursos(titulo,descripcion,estado,creador) VALUES (?,?,?,?)";
		$insert = $this->conexion->prepare($sql);
		$arrData = array($this->strTitulo,$this->strDesc,$this->strEstado,$this->strCreador);
		$resInsert = $insert->execute($arrData);
		$idInsert = $this->conexion->lastInsertId();
		//return $idInsert;
	}

	public function getCursoRep(string $titulo){

		
		$this->strTitulo=$titulo;
		

		$sql="SELECT count(*) total FROM cursos where titulo='$titulo'";
		$select = $this->conexion->query($sql);
		$result= $select->fetch()['total'];
		return $result;
	}

	public function getListCursos(){
		

		$sql="SELECT * FROM cursos ";
		$select = $this->conexion->query($sql);
		$result= $select->fetchall(PDO::FETCH_ASSOC);
		return $result;
	}

	public function getCurso(string $titulo){

		
		$this->strTitulo=$titulo;
		

		$sql="SELECT *  FROM cursos where titulo='$titulo'";
		$select = $this->conexion->query($sql);
		$result= $select->fetchall(PDO::FETCH_ASSOC);
		return $result;
	}

	public function getCreador(string $titulo,string $creador){

		$this->strTitulo=$titulo;
		$this->strCreador=$creador;
		

		$sql="SELECT count(*) total FROM cursos where titulo='$titulo' and creador='$creador'";
		$select = $this->conexion->query($sql);
		$result= $select->fetch()['total'];
		return $result;
	}

	public function deleteCurso(string $titulo,string $creador){

		$this->strTitulo=$titulo;
		$this->strCreador=$creador;
		

		$sql="DELETE FROM cursos where titulo=? and creador=?";
		$delete = $this->conexion->prepare($sql);
		$arrData = array($this->strTitulo,$this->strCreador);
		$del = $delete->execute($arrData);
		//return $del;
	}

	public function getId(string $titulo,string $creador){

		$this->strTitulo=$titulo;
		$this->strCreador=$creador;
		

		$sql="SELECT *  FROM cursos where titulo='$titulo' and creador='$creador'";
		$select = $this->conexion->query($sql);
		$result= $select->fetchall(PDO::FETCH_ASSOC);
		return $result;
	}

	public function editaCurso(string $titulo,string $desc,string $estado,string $creador,int $id){

		$this->strTitulo=$titulo;
		$this->strDesc=$desc;
		$this->strEstado=$estado;
		$this->strCreador=$creador;

		$sql="UPDATE cursos SET titulo=?,descripcion=?,estado=?,creador=? WHERE id=$id";
		$update = $this->conexion->prepare($sql);
		$arrData = array($this->strTitulo,$this->strDesc,$this->strEstado,$this->strCreador);
		$resExecute = $update->execute($arrData);
		//return $idInsert;
	}
	
}

?>