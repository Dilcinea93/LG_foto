<?
	
include('../../config.php');

$rec=$conexion->query("select * from clients where nombre_c='$nombre_c'");

?>

	<table id="idas" class="striped" style="width:100%;">
	<tr class="currentc">
		<th>Nombre del cliente</th>
		<th>Razon social</th>
		<th>Telefono</th>
		<th>Email</th>
	</tr>
<?
while($rw= $rec->fetch_array()){
	$nombre= $rw['nombre_c'];
	$razon= $rw['razon_s_c'];
	$telefono= '0'.$rw['cod_a'].'-'.$rw['telefono_c'];
	$email= $rw['email_c'];
	$direccion= $rw['direccion_c'];
?>
<tr>
	<td><? echo $nombre;?></td>
	<td><? echo $razon;?></td>
	<td><? echo $telefono;?></td>
	<td><? echo $email;?></td>
</tr><?
}
?>
</table>