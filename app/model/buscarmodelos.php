<?
include('../../config.php');
extract($_POST);
	$conexion=new mysqli('localhost','root','','l_g_fotografia2');
	
$query="select * from modelos where cedula='$cedula'";
echo "query ".$query;
$consulta=$conexion->query($query);
while($rs=$consulta->fetch_array()){
	$cedula=$rs['cedula'];
	$nombre=$rs['nombre'];
	$edad=$rs['edad'];
	$estado=$rs['estado'];
	$ciudad=$rs['ciudad'];
	$telefono=$rs['telefono'];
	$codi=$rs['codi'];
	$naci=$rs['naci'];
	$metro=$rs['metro'];
	$altura=$rs['altura'];
	$color=$rs['color'];
	$tipo_pelo=$rs['tipo_pelo'];
	$busto=$rs['busto'];
	$cintura=$rs['cintura'];
	$cadera=$rs['cadera'];
	$color_pelo=$rs['color_pelo'];
	$email=$rs['email'];
}


$resultado=array("cedula"=>$cedula,"nombre"=>$nombre,"edad"=>$edad,"estado"=>$estado,"ciudad"=>$ciudad,"telefono"=>$telefono,"codi"=>$codi,"naci"=>$naci,"metro"=>$metro,"altura"=>$altura,"color"=>$color,"tipo_pelo"=>$tipo_pelo,"busto"=>$busto,"cintura"=>$cintura,"cadera"=>$cadera,"color_pelo"=>$color_pelo,"email"=>$email);

echo json_encode($resultado);
?>