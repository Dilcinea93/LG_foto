<?
	include('conexion.php');
	extract($_POST);

	$conexion->query("delete from eventos where fecha='$fecha'");

?>