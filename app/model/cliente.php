<?
$conexion= new mysqli('localhost','root','','l_g_fotografia2');

$consulta=$conexion->query("select * from clients where id_c='$cedula'");
while($rw=$consulta->fetch_array()){
	
	$id=$rw['id_c'];
	$nombre=$rw['nombre_c'];
	$monto=$rw['precio'];
	$id=$rw['id_p'];
	$paquete=$rw['paquete'];
	$plan=$rw['plan'];
	$oferta=$rw['oferta'];
	$fecha=$rw['fecha'];
	$razon=$rw['razon_s_c'];
	$cod=$rw['cod_a'];
	$rif=$rw['rif'];

}
$resultado=array("nombre"=>$nombre,"rif"=>$rif,"cod"=>$cod,"razon"=>$razon,"monto"=>$monto,"id"=>$id,"paquete"=>$paquete,"plan"=>$plan,"oferta"=>$oferta,"fecha"=>$fecha);



	//ESTA LINEA ES OPCIONAL, SOLO SE USA PARA VER EN ACCION LA PALABRA "CARGANDO" 
	//AL MOMENTO DE SUBIRLA A UN HOSTING NO PONGAS ESTA LINEA EL TIEMPO ESTA EN SEGUNDOS
	sleep(0);


	//ASI SE ENVIAN LOS DATOS QUE RESULTARON, ESTO ES NOTACION JSON, SE RECOMIENDA TENER NOCIONES
	//BASICAS SOBRE JSON (YA SABES JAVASCRIPT, JSON NO ES NADA DIFERENTE)
	echo json_encode($resultado);
?>