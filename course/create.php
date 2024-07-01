<?php
session_start();
require_once("../class/autoload.php");

$titulo=$_POST['titulo'];
$desc=$_POST['descripcion'];
$estado=$_POST['estado'];
$creador=$_SESSION['id'];



$objCurso = new Cursos();
$sel = $objCurso->getCursoRep($titulo);
	//VALIDA QUE EL CURSO NO ESTE REPETIDO

	if($sel == '0'){
		$objCurso2 = new Cursos();

	$insert = $objCurso2->InsertCurso($titulo,$desc,$estado,$creador);
	//INSERTA UN NUEVO CURSO

	?>
	<script>
	 alert("CURSO CREADO CON EXITO");
	window.location.href="../dashboard.php";
	</script>
	
<?php

	}else{
?>
	<script>
	 alert("CURSO YA EXISTE, FAVOR INTENTE NUEVAMENTE");
	window.location.href="../creation.php";
	</script>
	
<?php	
	}
	
?>