<?

include('config.php');
	extract($_POST);
	$cedula=$_POST['cedula'];
	$nombre= $_POST['nombre'];
	$razon=$_POST['razon'];
	$servicio=$_POST['servicio'];
	$telefono=$_POST['telefono'];
	$precio=$_POST['precio'];

	$conexion->query("insert into proveedores set 
			ci_r='$cedula',
			nombre_r='$nombre',
			telefono='$telefono',
			razon='$razon',
			servicio='$servicio',
			precio='$precio'

			on duplicate key update
			ci_r='$cedula',
			nombre_r='$nombre',
			telefono='$telefono',
			razon='$razon',
			servicio='$servicio',
			precio='$precio'


		");
?>