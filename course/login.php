<?php
require_once("../class/autoload.php");
session_start();


$mail = $_POST['mail'];
$pass = $_POST['pass'];

$objUsuario = new Usuario();
$nom = $objUsuario->login($mail,$pass); //invoca la clase y envia los parametros PARA OBTENER LOS DATOS


if(!empty($nom)){
	  $_SESSION["id"]=$nom; //Asigna variable sesion 
?>

<script>
window.location.href="../dashboard.php"; //redirecciona al dashboard principal
</script>

<?php
}else{

?>
<script>
	window.location.href="../index.php";//redirecciona al login 
   alert("ERROR EN EL INICIO DE SESION INTENTE NUEVAMENTE");
</script>

<?php
}

?>




