<?

	$result=$conexion->query("select * from precios,gastos");
	$rw=$result->fetch_array();


	$llamadas=$rw['llamadas'];
	$iva=$rw['iva'];
	$emails=$rw['emails'];
	$reuniones=$rw['reunion_c'];
	$vestuario=$rw['p_vestuario'];
	$maquillaje=$rw['p_maquillaje'];
	$guionista=$rw['guionista'];
	$extras=$rw['extras'];

	$montaje=$rw['montaje'];
	$horas=$rw['horas'];
	$desmontaje=$rw['desmontaje'];
	$extras_produccion=$rw['extras_pro'];

	$retoque=$rw['retoque'];
	$edicion=$rw['edicion'];
	$correccion=$rw['correccion'];
	$reuniones_clientes=$rw['reun_c_post'];
	$entrega=$rw['entrega'];
	$llamadas_post=$rw['llamadas_post'];
	$email_post=$rw['email_post'];

	$transporte=$rw['transporte'];
	$refrigerio=$rw['refrigerio'];
	$extra=$rw['extra'];
	$equipo=$rw['equipos'];
	$alquiler=$rw['alquileres'];
	
	$fotografo=$rw['fotografos'];
	$camarografo=$rw['camarografos'];
	$asistente=$rw['asistentes'];
	$maquillador=$rw['maquilladores'];
	$estilista=$rw['estilistas'];
	$coordinador=$rw['coordinadores'];
	$extra_2=$rw['extras'];
	$experiencia=$rw['experiencia'];
	$complicado=$rw['complicado'];
	$complejo=$rw['complejo'];
	$administrador=$rw['administrador'];
	$organizador=$rw['organizador'];

	?>