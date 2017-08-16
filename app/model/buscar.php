<?
	include('../../config.php');
	extract($_POST);
	$result=$conexion->query("select * from proveedores where ci_r='$cedula'");

while($rw=$result->fetch_array()){
	$nombre=$rw['nombre_r'];
	$razon=$rw['razon'];
	$servicio=$rw['servicio'];
	$telefono=$rw['telefono'];
	$precio=$rw['precio'];
	$rif=$rw['rif'];
	$cod=$rw['cod_a'];

	
}

$resultado=array("nombre"=>$nombre,"cod"=>$cod,"rif"=>$rif,"razon"=>$razon,"servicio"=>$servicio,"telefono"=>$telefono,"precio"=>$precio);

echo json_encode($resultado);
	
?>