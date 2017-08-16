<?
	include('../../config.php');
	extract($_POST);

	$conexion->query("delete from clients where id_c='$cedula'");
	?>
	<?
?>