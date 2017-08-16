<?php
	include('../config.php');
	$query="select img,img2 from pdf";
	$res=$conexion->query($query);
?>
	<table>
		<tr>
			<td>portada</td>
			<td>Contraportada</td>
		</tr>
<?
	while($rw=$res->fetch_array()){
		$img1= $rw['img'];
		$img2= $rw['img2'];
		?>
		<tr>
			<td><center><img src="<?=(!empty($rw['img'])?$rw['img']:'rtyrty');?>" height="200"/></center></td>
			<td><center><img src="<?=(!empty($rw['img2'])?$rw['img2']:'tyrrty');?>" height="200"/></center></td>
		</tr>
		<?
	}
?>

	</table>