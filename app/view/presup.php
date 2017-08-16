<?
include('../controller/calculos.php');
	extract($_POST);

	$dia= date('d');
	$mes= date('m');
	$ano= date('Y');
?>

<script type="text/javascript">
	function funcion(){
		document.getElementById("volver").style.display='none';
		document.getElementById("imprimir").style.display='none';
	}
</script>
<meta charset="utf-8">
		<link rel="stylesheet" media="screen" href="../../lib/css/style.css">
		<link rel="stylesheet" media="screen" href="../../lib/Materializecss/materialize/css/materialize.min.css">
	<div id="reporte">
<img src="../../lib/images/logof.jpg" style="margin-left:70px;">

<div class="row">

	<div class="col s3 fecha" style="border:2px solid rd;margin-left:650px;">
		<?
			echo 'Caracas, '.$dia. '/' .$mes. '/' .$ano;
		?>
	</div>
</div>


<div class="row">

	<div class="col s4">

		<p>Sres. <?echo $empresa;?></br>
		RIF: <?echo $rif;?></p>

<?php
	if($genero=='m'){
		?>
		<p >Estimado SR <b><?echo $nombre;?></b></p>
		<?
	}else{
if($genero=='f'){
	?>

		<p >Estimada Srta <b><?echo $nombre;?></b></p>
		<?
}
		
	}
?>
	</div>
	</div>
<p align="center" class="flow-text">A continuación se presenta el presupuesto solicitado por concepto de </br><?echo "\"".$concepto."\""?><p>
 

 <?php
 	if($foto=='foto'){

?>
	<table id="idas" style="width:400px;">
 	

 	<tr>
 		<th>Descripción</th>
 		<th></th>
 		<th>Importe</th>
 	</tr>
<?
if(is_array($_POST['oferta'])){
    $num_countries= count($_POST['oferta']);
        foreach($_POST['oferta'] as $key=>$value){
            ?>
<tr>
   <td> <?echo $value;
   ?></td>

</tr>
<?
    }
} 
?>

<tr><td></td>
	<td>Subtotal</td>
	<td><?php echo $totalt;?></td>
</tr>
<tr><td></td>
	<td>Iva</td>
	<td><?php echo $ivatotalt;?></td>
</tr>
<tr><td></td>
	<td>Total</td>
	<td><?php echo $totaltotal;?></td>
</tr>
<tr><td></td>
	<td>Paquete premium (61% de interés)</td>
	<td><?php echo $totalmas61;?></td>
</tr>
<tr><td></td>
	<td>Paquete platinum (90% de interés)</td>
	<td><?php echo $totalmas90;?></td>
</tr>
<tr><td></td>
	<td>Paquete VIP (119% de interés)</td>
	<td><?php echo $totalmas119;?></td>
</tr>
</table>
<?
 	}

 		if($foto=='video'){
 			?>
 			<table id="idas" style="width:400px;">
 	

 	<tr>
 		<th>Descripción</th>
 		<th></th>
 		<th>Importe</th>
 	</tr>
<?
if(is_array($_POST['oferta'])){
    $num_countries= count($_POST['oferta']);
        foreach($_POST['oferta'] as $key=>$value){
            ?>
<tr>
   <td> <?echo $value;
   ?></td>

</tr>
<?
    }
} 
?>
 				<tr><td></td>
	<td>Subtotal</td>
	<td><?php echo $totalt;?></td>
</tr>
<tr><td></td>
	<td>Iva</td>
	<td><?php echo $ivatotalt;?></td>
</tr>
<tr><td></td>
	<td>Total</td>
	<td><?php echo $totaltotal;?></td>
</tr>

</table>
 			<?
 		}

 		if($foto=='fotoyvideo'){
 			?>
 				<table id="idas" style="width:400px;">
 	

 	<tr>
 		<th>Descripción</th>
 		<th></th>
 		<th>Importe</th>
 	</tr>
<?
if(is_array($_POST['oferta'])){
    $num_countries= count($_POST['oferta']);
        foreach($_POST['oferta'] as $key=>$value){
            ?>
<tr>
   <td> <?echo $value;
   ?></td>

</tr>
<?
    }
} 
?>
 				<tr><td></td>
	<td>Subtotal</td>
	<td><?php echo $totalt;?></td>
</tr>
<tr><td></td>
	<td>Iva</td>
	<td><?php echo $ivatotalt;?></td>
</tr>
<tr><td></td>
	<td>Total</td>
	<td><?php echo $totaltotal;?></td>
</tr>

</table>
 			<?

 		}
 	
 ?>

<?

?>
<?

?>
	
<?

			?>


<div class="row">
	<div class="col s7">
<p><span style="color:red;">Nota:</span><?
	if($foto=='foto'){

echo $nota1;
	}
		if($foto=='video'){
			echo $nota2;
		}

		if($foto=='ftoyvideo'){
			echo $nota3;
		}
	?></p>
</div>
</div>
<?
		
	
?>
	
</br>
</br>
	<img src="../../documentos/footer.png" style="height:350px;">

<div id="opciones">
			<a style="color:#000;"id="volver" href="javascript:history.back(-1)">Volver</a>
			&nbsp; &nbsp; &nbsp; 
			<a style="color:#000;"id="imprimir" href="javascript:window.print()" onclick="funcion()">Imprimir</a>
</div>
</div>