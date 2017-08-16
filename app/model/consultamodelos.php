<?
	include('../../config.php');
    extract($_POST);

    $result=$conexion->query("select * from estados inner join modelos
        where estados.id=modelos.estado and estados.id='$estadosmodel'");
?>

    	<table id="idas" class="striped" style="width:600px;">
    		<tr class="currentc">
                <th>Cedula</th>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Estado</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Tipo de pelo</th>
                <th>Color de pelo</th>
                <th>Foto</th>
    		</tr><?
while($rw= $result->fetch_array()){
$nacionalidad=$rw['naci'];
$cedula=$rw['cedula'];
    $ciudad= $rw['ciudad'].' Estado '.$rw['estado'];
    $nombre=$rw['nombre'];
    $edad=$rw['edad'];
    $pelo=$rw['tipo_pelo'];
    $peloc=$rw['color_pelo'];
    $mail=$rw['email'];
    $telefono= '0'.$rw['cod_a'].'-'.$rw['telefono'];


?>
    <tr>
        <td><? echo $nacionalidad."-".$cedula?></td>
        <td><? echo $nombre?></td>
        <td><? echo $edad?></td>
        <td><? echo $ciudad?></td>

        <td><? echo $telefono?></td>
        <td><? echo $mail?></td>
        <td><? echo $pelo?></td>
        <td><? echo $peloc?></td>
        <td>
                <img src="<?=(!empty($rw['foto'])?$rw['foto']:'');?>"/></td>
                
    </tr>
    <?
}
?>


    	</table>

       