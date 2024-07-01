<?php
require_once("../class/conexion.php");

$time = time();
$fech= date("Y-m-d");
$hour= date("H:i", $time);

$cadena_sql ="Select * FROM dias_de_proceso where id_pro=(SELECT MAX(id_pro) FROM dias_de_proceso)";
$x = mysql_query($cadena_sql);
$arreglo = mysql_fetch_array($x);


$eje=$arreglo['estado'];

echo $eje ; 

?>
