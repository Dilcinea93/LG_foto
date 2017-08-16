<?
	include('../../config.php');
	extract($_POST);

	$conexion->query("delete from proveedores where ci_r='$cedula'");
	?>
	<?
?>