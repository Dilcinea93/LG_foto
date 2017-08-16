<?
include('../../config.php');

	extract($_POST);

	$conexion->query("insert into clients set 
			id_c='$cedula',
			nombre_c='$nombre',
			naci='$naci',
			telefono_c='$telefono',
			email_c='$email',
			razon_s_c='$razon',
			rif='$rif',
			estado='$pais2',
			ciudad='$provincia2',
			cod_a='$codi'

			on duplicate key update

			nombre_c='$nombre',
			naci='$naci',
			telefono_c='$telefono',
			email_c='$email',
			rif='$rif',
			razon_s_c='$razon',
			estado='$pais2',
			ciudad='$provincia2',
			cod_a='$codi'


		");
	?>
	