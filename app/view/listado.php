<?		
echo HEAD;
$queryocupacion=$_POST['queryocupacion'];

	if($queryocupacion=="0"){


	echo "<a href='javascript:history.back(-1);' id='link_r'>Volver</a>";
	echo '<h3>
la lista de consulta esta vacia. Porfavor seleccione un valor</h3>';
	}

	else {

	$consulta="Select * from proveedores where servicio= '$queryocupacion'";
	$result=$conexion->query($consulta);
 }

 ?>

 <a href="javascript:history.back(-1);" id="link_r" >Volver</a>
<div id="titulo">
	<a align="center"><u>Listado de <?=$queryocupacion."s"?></u></a>
</div>

<div id="container">

<table id="idas" class="bordered striped">
		<tr class="currentc">
					<th>Cédula</th>
					<th>Nombre</th>
					<th>Teléfono</th>
					<th>Razon social</th>
					<th>Precio</th>
				</tr>


				<?
	while($rw=$result->fetch_array()) {
		?>
			<tr>
					<td><?=$rw['ci_r'];?></td>
					<td><?=$rw['nombre_r'];?></td>
					<td><?=$rw['cod_a']."-".$rw['telefono'];?></td>
					<td><?=$rw['razon'];?></td>
					<td><?=$rw['precio'];?></td>
			</tr>	
		<?
	
}
?>
</table>
</div>