<?php
session_start();
require_once("../class/autoload.php");

$titulo=$_GET['var1'];
$creador=$_SESSION['id'];



$objCurso = new Cursos();
$sel = $objCurso->getCreador($titulo,$creador);
	//VALIDA QUE EL CURSO SEA DEL USUARIO ACTIVO


	if($sel == '0'){
		

	?>
	<script>
	 alert("CURSO CORRESPONDE A OTRO USUARIO CREADOR");
	window.location.href="../dashboard.php";
	</script>
	
<?php

	}else{
		$objCurso2 = new Cursos();

	$insert = $objCurso2->deleteCurso($titulo,$creador);
	//ELIMINA EL CURSO
?>
	<script>
	 alert("ELIMINADO CORRECTAMENTE");
	window.location.href="../dashboard.php";
	</script>
	
<?php	
	}
	
?>