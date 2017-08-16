<?
include('../../config.php');

	extract($_POST);
	$guion="-";
	$conexion->query("insert into proveedores set 
			
			ci_r='$cedula',
			nombre_r='$nombre',
			telefono='$telefono',
			servicio='$servicio',
			precio='$precio',
			rif='$rif',
			cod_a='$codi',
			estado='$pais',
			ciudad='$provincia',
			naci='$naci',
			razon='$razon'

			on duplicate key update


			ci_r='$cedula',
			nombre_r='$nombre',
			telefono='$telefono',
			servicio='$servicio',
			precio='$precio',
			rif='$rif',
			cod_a='$codi',
			estado='$pais',
			ciudad='$provincia',
			naci='$naci',
			razon='$razon'

		");
	?>
	<?


?>