<?
	include('../../config.php');
	extract($_POST);
	$sql="select * from clients where id_c='$cedula'";
	$result=$conexion->query($sql);

while($rw=$result->fetch_array()){
	$nombre=$rw['nombre_c'];
	$razon=$rw['razon_s_c'];
	$telefono=$rw['telefono_c'];
	$email=$rw['email_c'];
	$rif=$rw['rif'];

	
}

$resultado=array("nombre"=>$nombre,"rif"=>$rif,"razon"=>$razon,"telefono"=>$telefono,"email"=>$email);

echo json_encode($resultado);
	
?>