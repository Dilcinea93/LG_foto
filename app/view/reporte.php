<?include('../controller/calculos.php');
?>
<meta charset="utf-8">

<script type="text/javascript">
	function funcion(){
		document.getElementById("volver").style.display='none';
		document.getElementById("imprimir").style.display='none';
	}
</script>
		<link rel="stylesheet" media="screen" href="../../lib/css/style.css">
	<div id="reporte">


<img src="../../lib/images/logof.jpg" style="margin-left:120px;">
<h4>Presupuesto </h4>

		<div id="" style="border:2px solid gren;">
			
			<div style="margin-left:170px;border:2px solid re;">Estimado(a) <?echo $nombre?></div>



			<div style="border:2px solid blak;margin-top:40px;margin-left:190px; width:530px;text-align:justify;">
		<h5 align="center">
			Atendiendo su solicitud de presupuesto, por concepto de <strong>sesi&oacute;n de fotos 
			<?
				if($paquete=='Personal'){
					echo 'Personal';
				}else{
			?>para <?echo $paquete;
		}?>
	</strong></br>
			detallamos a continuaci&oacute;n:
		</h5>

		</div>
		</div>


	<table id="results" border="1">


		<tr>

			<th id="header" colspan="10">Planes de financiamiento</th>
		</tr>
		<tr>
			
	<th id="header">Servicio</th>
	<th id="import">Importe</th>
			<th id="header">Pronto pago</br>
			<h5><i>10% de descuento</i><h5></th>
	<th id="import">Importe</th>
			<th id="header" colspan="2">Doble cuota</br>
			<h5><i>15% de interés</i><h5></th>
	<th id="import">Importe</th>
			<th id="header" colspan="3">Triple cuota</br>
			<h5><i>25% de interés</i><h5></th>
		</tr>





		<tr>
			
		<td> </td>
		<td class="grey"> </td>
			<td>Cuota única: 100%</td>
			<td class="grey"></td>
			<td>Cuota 1: 50%</td>
			<td>Cuota 2: 50%</td>
			<td class="grey"></td>
			<td>Cuota 1: 50%</td>
			<td>Cuota 2: 25%</td>
			<td>Cuota 3: 25%</td>
		</tr>
			
	<tr>
		<td style="width:340px;"><h3><strong>Sesion de estudio</strong></h3></td>
		<td class="grey"><?
	printf("%0.2f",  $totalt);?></td>

		<td><?printf("%0.2f",  $totalmenos10);?></td>
		<td class="grey"> <?printf("%0.2f",  $totalmasquince);?></td>


		<td><?printf("%0.2f",  $cincuenta);?></td>
		<td><?printf("%0.2f",  $cincuenta);?></td>

		<td class="grey"> <?printf("%0.2f",  $totaltmasveinticinco);?></td>
		<td><?printf("%0.2f",  $totaltmasveinticinco);?></td>
		<td><?printf("%0.2f",  $twentyfive);?></td>
		<td><?printf("%0.2f",  $twentyfive);?></td>
	</tr>

			
	
			
	<tr>
		<td><strong>Paquete premium</strong></td>
		<td class="grey"></td>
		<td></td>
		<td class="grey"></td>
		<td></td>
		<td></td>
		<td class="grey"></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
			
	<tr>
		<td>
			</br>
			<h5><i>61% de interes</i><h5>
		</td>
		<td class="grey"> 
			<?printf("%0.2f",$totalmas61);?></td>
		<td><?printf("%0.2f",$premium_10);?></td>
		<td class="grey"><?printf("%0.2f",$premium_15);?></td>
		<td><?printf("%0.2f",$half_premium);?></td>
		<td><?printf("%0.2f",$half_premium);?></td>
		<td class="grey"><?printf("%0.2f",$premium_25);?></td>
		<td><?printf("%0.2f",$premium_25_2);?></td>
		<td><?printf("%0.2f",$premium_25_25);?></td>
		<td><?printf("%0.2f",$premium_25_25);?></td>
	</tr>
			
	<tr>
		<td><?if($paquete=='Embarazadas'){
					?>
					<center><i align="center" style="font-size:14px;">Sesion de estudio + cobertura en clinica</i></center>
				<?
			}?>
			</td>
		<td class="grey"></td>
		<td></td>
		<td class="grey"></td>
		<td></td>
		<td></td>
		<td class="grey"></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
			
	<tr>
		<td><strong>Paquete platinum</strong></td>
		<td class="grey"></td>
		<td></td>
		<td class="grey"></td>
		<td></td>
		<td></td>
		<td class="grey"></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
			
	<tr>
		<td></br>
			<h5><i>90% de interes</i><h5></td>


		<td class="grey"><?printf("%0.2f",$totalmas90);?></td>
		<td>
			<?printf("%0.2f",$platinum_10)?></td>
		<td class="grey"><?printf("%0.2f",$platinum_15)?></td>
		<td><?printf("%0.2f",$platinum_15_50)?></td>
		<td><?printf("%0.2f",$platinum_15_50)?></td>
		<td class="grey"><?printf("%0.2f",$platinum_25)?></td>
		<td><? printf("%0.2f",$platinum_25_50)?></td>
		<td><?printf("%0.2f",$platinum_25_25)?></td>
		<td><?printf("%0.2f",$platinum_25_25)?></td>
	</tr>
			
	<tr>
		<td>
		<?if($paquete=='Embarazadas'){
				?>
					<center><i align="center" style="font-size:14px;">Sesion de estudio + cobertura en clinica+ sesion bebé recien nacido</i></center>
				<?
			}?></td>
		<td class="grey"></td>
		<td></td>
		<td class="grey"></td>
		<td ></td>
		<td></td>
		<td class="grey"></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
			
	<tr>
		<td><strong>Paquete VIP</strong></td>
		<td class="grey"></td>
		<td></td>
		<td class="grey"></td>
		<td></td>
		<td></td>
		<td class="grey"></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
			
	<tr>
		<td></br>
			<h5><i>119% de interés</i><h5></td>
		<td class="grey"><?printf("%0.2f",$totalmas119)?></td>
		<td><?printf("%0.2f",$totalmas119_10)?></td>
		<td class="grey"><?printf("%0.2f",$totalmas119_15_15)?></td>


		<td><?printf("%0.2f",$totalmas119_15_50)?></td>
		<td><?printf("%0.2f",$totalmas119_15_50)?></td>
		<td class="grey"><?printf("%0.2f",$VIP_25)?></td>
		<td> <?printf("%0.2f",$VIP_25_50)?></td>
		<td><?printf("%0.2f",$VIP_25_20)?></td>
		<td><?printf("%0.2f",$VIP_25_20)?></td>
	</tr>

	<tr>
		<td>
		<?if($paquete=='Embarazadas'){

				?>
					<center><i align="center" style="font-size:14px;">Sesion de estudio + cobertura en clinica+ sesion bebé recien nacido+Sesion en exterior</i></center>
				<?
			}?></td>
		<td class="grey"></td>
		<td></td>
		<td class="grey"></td>
		<td></td>
		<td></td>
		<td class="grey"></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
		</table>

<p style="color:#000;"><i>Oferta v&aacute;lida por 15 d&iacute;as</i></p>


<div id="opciones">
			<a style="color:#000;"id="volver" href="javascript:history.back(-1)">Volver</a>
			&nbsp; &nbsp; &nbsp; 
			<a style="color:#000;"id="imprimir" href="javascript:window.print()" onclick="funcion()">Imprimir</a>
</div>

</div>
