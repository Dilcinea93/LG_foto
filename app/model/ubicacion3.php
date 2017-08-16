<?
	include('../../config.php');
    extract($_POST);
	$result=$conexion->query("select * from estados inner join clients
		where estados.id=clients.estado and estados.id='$estados3'");
?>

    	<table id="idas" width="1200"class="striped">
    		<tr class="currentc">
                <th>C&eacute;dula</th>
                <th>Nombre</th>
                <th>Razón Social</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Ciudad</th>
    		</tr><?
while($rw= $result->fetch_array()){

$cedula=$rw['id_c'];
$nacionalidad=$rw['naci'];
    $ciudad= $rw['ciudad'];
    $nombre=$rw['nombre_c'];
    $razon=$rw['razon_s_c'];
    $email=$rw['email_c'];
    $telefono= '0'.$rw['cod_a'].'-'.$rw['telefono_c'];
    

    ?>
</br>
    <tr>
        <td><? echo $nacionalidad."-".$cedula?></td>
        <td><? echo $nombre?></td>
        <td><? echo $razon?></td>
        <td><? echo $telefono?></td>
        <td><? echo $email?></td>
        <td><? echo $ciudad?></td>
    </tr>
    <?
}
?>


    	</table>