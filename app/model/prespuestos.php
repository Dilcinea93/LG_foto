<?

include('../../config.php');


$consulta=$conexion->query("select * from clients,registro_p where clients.id_c=registro_p.id_c and clients.id_c='$cedula' order by id_p asc");

?>
	<table id="idas" class="striped" style="width:100%;">


	<tr class="currentc">
	<th>C&eacute;dula</th>
	<th>Nombre</th>
	<th>Razon</th>
	<th>RIF</th>
	<th>Paquete</th>
	<th>Modalidad</th>
	<th>Oferta</th>
	<th>Presupuesto por</th>
	<th>Monto</th>
	<th>Fecha</th>
<?

while($rw=$consulta->fetch_array()){
	
	$id=$rw['id_c'];
	$nombre=$rw['nombre_c'];
	$monto=$rw['precio'];
	$rif=$rw['rif'];
	$paquete=$rw['paquete'];
	$oferta=$rw['oferta'];
	$compra=$rw['compra'];
	$modo=$rw['modalidad'];
	$fecha=$rw['fecha'];
	$razon=$rw['razon_s_c'];
echo '

	</tr>
	<tr>
	<td id="consulta">'.$id.'</td>
	<td id="consulta">'.$nombre.'</td>
	<td id="consulta">'.$razon.'</td>
	<td id="consulta">'.$rif.'</td>
	<td id="consulta">'.$paquete.'</td>
	<td id="consulta">'.$modo.'</td>
	<td id="consulta">'.$oferta.'</td>
	<td id="consulta">'.$compra.'</td>
	<td id="consulta">'.$monto.'</td>
	<td id="consulta">'.$fecha.'</td>
	</tr>
	';
}
?>
</table>