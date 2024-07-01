<?php
session_start();
require_once("../class/autoload.php");

$titulo=$_POST['titulo'];
$desc=$_POST['descripcion'];
$estado=$_POST['estado'];
$creador=$_SESSION['id'];


$objCurso = new Cursos();
$sel = $objCurso->getCreador($titulo,$creador);
	//VALIDA QUE EL CURSO CORRESPONDA AL USUARIO LOGEADO


	if($sel == '0'){
		
		?>
	<script>
	 alert("CURSO CORRESPONDE A OTRO USUARIO CREADOR");
	window.location.href="../dashboard.php";
	</script>
	
<?php

	}else{

	
	
	$objCurso2 = new Cursos();
	$sel2 = $objCurso2->getId($titulo,$creador);
//OBTIENE EL ID DEL CURSO SELECCIONADO

	foreach ($sel2 as $row)
	{
    $idd= $row["id"];
   
	}

	$objCurso3 = new Cursos();

	$modif = $objCurso3->editaCurso($titulo,$desc,$estado,$creador,$idd);
	//MODIFICA EL CURSO


	?>
	<script>
	 alert("CURSO MODIFICADO CON EXITO");
	window.location.href="../dashboard.php";
	</script>
	
<?php
  }
	
?>