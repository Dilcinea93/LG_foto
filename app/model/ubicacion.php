<?
	include('../../config.php');
    extract($_POST);
	$result=$conexion->query("select * from estados inner join proveedores
		where estados.id=proveedores.estado and estados.id='$estados'");
?>

    	<table id="idas" class="striped">
    		<tr class="currentc">
                <th>Cedula</th>
                <th>Nombre</th>
                <th>Razón Social</th>
                <th>Servicio</th>
                <th>Precio</th>
                <th>Ciudad</th>
                <th>Teléfono</th>
    		</tr><?
while($rw= $result->fetch_array()){
$nacionalidad=$rw['naci'];
$cedula=$rw['ci_r'];
    $ciudad= $rw['ciudad'];
    $nombre=$rw['nombre_r'];
    $nacionalidad=$rw['naci'];
    $razon=$rw['razon'];
    $servicio=$rw['servicio'];
    $telefono= '0'.$rw['cod_a'].'-'.$rw['telefono'];
    $precio= $rw['precio'];


?>
    <tr>
        <td><? echo $nacionalidad."-".$cedula?></td>
        <td><? echo $nombre?></td>
        <td><? echo $razon?></td>
        <td><? echo $servicio?></td>
        <td><? echo $precio?></td>
        <td><? echo $ciudad?></td>
        <td><? echo $telefono?></td>
    </tr>
    <?
}
?>


    	</table>