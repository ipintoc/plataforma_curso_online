<?php

require_once("../class/autoload.php");

$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$pass=$_POST['password'];


$objUsuario = new Usuario();
$sel = $objUsuario->getMail($correo);
	//echo ( $sel);

	if($sel == '0'){
		$objUsuario2 = new Usuario();

	$insert = $objUsuario2->InsertUsuario($nombre,$correo,$pass);
	//echo $insert;

	?>
	<script>
	 alert("REGISTRO EXITOSO");
	window.location.href="../index.php";
	</script>
	
<?php

	}else{
?>
	<script>
	 alert("EMAIL ya existe, pruebe con otro");
	window.location.href="../register.php";
	</script>
	
<?php	
	}
	
?>