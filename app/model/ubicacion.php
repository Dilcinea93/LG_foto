<?
	include('../../config.php');
    extract($_POST);
	$result=$conexion->query("select * from estados inner join proveedores
		where estados.id=proveedores.estado and estados.id='$estados'");
?>

    	<table id="idas" class="striped" style="width:100%;">
    		<tr class="currentc">
                <th>Nacionalidad y cédula</th>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>RIF</th>
                    <th>Razon social</th>
                    <th>Servicio</th>
                    <th>Precio</th>
                    <th>Ciudad</th>
    		</tr><?
while($rw= $result->fetch_array()){
$nacionalidad=$rw['naci']."-".$rw['ci_r'];
    $nombre=$rw['nombre_r'];
    $telefono= '0'.$rw['cod_a'].'-'.$rw['telefono'];
    $rif=$rw['rif'];
    $razon=$rw['razon'];
    $servicio=$rw['servicio'];
    $precio= $rw['precio'];
    $ciudad= $rw['ciudad'];


?>
    <tr>
        <td><? echo $nacionalidad?></td>
        <td><? echo $nombre?></td>
        <td><? echo $telefono?></td>
        <td><? echo $rif?></td>
        <td><? echo $razon?></td>
        <td><? echo $servicio?></td>
        <td><? echo $precio?></td>
        <td><? echo $ciudad?></td>
    </tr>
    <?
}
?>


    	</table>