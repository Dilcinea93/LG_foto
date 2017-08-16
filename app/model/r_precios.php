<?
include('../../config.php');
extract($_POST);

	$conexion->query("insert into precios set
		
	id='$id',
		llamadas='$llamadas_p',
		iva='$civa',
		emails='$email_p',
		reunion_c='$reunion_p',
		p_vestuario='$vestuario_p',
		p_maquillaje='$maquillaje_p',
		extras='$extras_p',
		montaje='$montaje_p',
		horas='$horas_p',
		desmontaje='$desmontaje_p',
		extras_pro='$extra_p_prod',
		retoque='$retoque_p',
		edicion='$edicion_p',
		correccion='$correccion_p',
		reun_c_post='$reunion_c_p',
		entrega='$entrega_p',

		llamadas_post='$llamada_post_p',
		email_post='$email_p_post'


on duplicate key update

id='$id',
		llamadas='$llamadas_p',
		iva='$civa',
		emails='$email_p',
		reunion_c='$reunion_p',
		p_vestuario='$vestuario_p',
		p_maquillaje='$maquillaje_p',
		extras='$extras_p',
		montaje='$montaje_p',
		horas='$horas_p',
		desmontaje='$desmontaje_p',
		extras_pro='$extra_p_prod',
		retoque='$retoque_p',
		edicion='$edicion_p',
		correccion='$correccion_p',
		reun_c_post='$reunion_c_p',
		entrega='$entrega_p',

		llamadas_post='$llamada_post_p',
		email_post='$email_p_post'


	");

$conexion->query("insert into gastos set 
	id='$id',
		transporte='$transporte',
		refrigerio='$refrigerio',
		equipos='$equipo',
		alquileres='$alquiler',
		extras='$extra',
		fotografos='$fotografo',
		camarografos='$camarografo',
		asistentes='$asistente',
		maquilladores='$maquillador',
		estilistas='$estilista',
		coordinadores='$coordinador',
		experiencia='$experiencia',
		complicado='$complicado',
		complejo='$complejo',
		administrador='$administrador',
		organizador='$organizador'
on duplicate key update 

		transporte='$transporte',
		refrigerio='$refrigerio',
		equipos='$equipo',
		alquileres='$alquiler',
		extras='$extra',
		fotografos='$fotografo',
		camarografos='$camarografo',
		asistentes='$asistente',
		maquilladores='$maquillador',
		estilistas='$estilista',
		coordinadores='$coordinador',
		experiencia='$experiencia',
		complicado='$complicado',
		complejo='$complejo',
		administrador='$administrador',
		organizador='$organizador'

	");


/*
	esto no guarda

	id='$id',
		llamadas='$llamadas_p',
		iva='$civa',
		emails='$email_p',
		reunion_c='$reunion_p',
		p_vestuario='$vestuario_p',
		p_maquillaje='$maquillaje_p',
		extras='$extras_p',
		montaje='$montaje_p',
		horas='$horas_p',
		desmontaje='$desmontaje_p',
		extras_pro='$extra_p_prod',
		retoque='$retoque_p',
		edicion='$edicion_p',
		correccion='$correccion_p',
		reun_c_post='$reunion_c_p',
		entrega='$entrega_p',
		llamadas_post='$llamada_post_p',
		email_post='$email_p_post'

		no comprendo porque.. la solucion fue ir guardando de uno en uno cada campo...
		osea, de la forma mas loca, si ejecutaba la consulta completa no guardaba.
		si ejecutaba hasta la mitad si se guardaba...
		si copiaba la mitad que faltaba completa ya no guardaba.
		pero si copiaba de uno en uno volvia a guardar 
		entonces fui de uno en uno hasta que guarde todos los campos


		bueno, una de mis hipotesis es que en la sentencia sql anterior habia un campo que no tenia campo en la base
		de datos... era el de guionista.. lo quite y guardo
		PERO NO ERA POR ESO. -.- 
		osea, despues lo volvi a poner y lo quit y ya no guardaba... o.O


		PNSE  q podia sr por esto

		entrega='$entrega_p',

		llamadas_post='$llamada_post_p',

	ese espacio pero NO



	pense q podia ser por sto

		email_post='$email_p_post'
		on duplicate key update 

		que on duplicate esta pegado a la insercion, pero NO



		cuando le quito el on duplicat key update funciona.. 

		PERO SE LO VOLVI A PONER Y FUNCIONO.. O.o
*/


?>