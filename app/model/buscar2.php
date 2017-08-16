<?
	include('../../config.php');
	extract($_POST);
	$result=$conexion->query("select * from clients where id_c='$cedula'");

while($rw=$result->fetch_array()){
	$nombre=$rw['nombre_c'];
	$razon=$rw['razon_s_c'];
	$telefono=$rw['telefono_c'];
	$email=$rw['email_c'];
	$fax=$rw['fax_c'];
	$direccion=$rw['direccion_c'];
	$rif=$rw['rif'];

	
}

$resultado=array("nombre"=>$nombre,"rif"=>$rif,"razon"=>$razon,"telefono"=>$telefono,"email"=>$email,"fax"=>$fax,"direccion"=>$direccion);

echo json_encode($resultado);
	
?>