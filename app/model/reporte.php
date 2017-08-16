<?echo HEAD;?>

<h4>Presupuesto </h4>

		<div id="">
			
			<div style="float:left;margin-left:170px;">Estimado(a) <?echo $nombre?></div>



			<div style="float:left; margin-top:40px; width:530px;text-align:justify;">
		<h5>
			Atendiendo su solicitud de presupuesto, por concepto de: <strong>Sesion de fotos para <?echo $paquete?></strong></br>
			detallamos a continuacion:
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
		<td style="width:340px;">Sesion de estudio</td>
		<td class="grey"><?echo $totalt?></td>
		<td><?echo $totalmenos10?></td>
		<td class="grey"> <?echo $totalmasquince?></td>
		<td><?echo $cincuenta?></td>
		<td><?echo $cincuenta?></td>
		<td class="grey"> <?echo $totaltmasveinticinco?></td>
		<td><?echo $fifty?></td>
		<td><?echo $twentyfive?></td>
		<td><?echo $twentyfive?></td>
	</tr>

			
	<tr>
		<td>
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
		<td></td>
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
		<td>Paquete premium</td>
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
		<td class="grey"> <?echo $totalmas61?></td>
		<td><?echo $premium_10?></td>
		<td class="grey"><?echo $premium_15?></td>
		<td><?echo $half_premium?></td>
		<td><?echo $half_premium?></td>
		<td class="grey"><?echo $premium_25?></td>
		<td><?echo $premium_25_2?></td>
		<td><?echo $premium_25_25?></td>
		<td><?echo $premium_25_25?></td>
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
		<td>Paquete platinum</td>
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
		<td class="grey"><?echo $totalmas90?></td>
		<td><?echo $platinum_10?></td>
		<td class="grey"><?echo $platinum_15?></td>
		<td><?echo $platinum_15_50?></td>
		<td><?echo $platinum_15_50?></td>
		<td class="grey"><?echo $platinum_25?></td>
		<td><? echo $platinum_25_50?></td>
		<td><?echo $platinum_25_25?></td>
		<td><?echo $platinum_25_25?></td>
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
		<td>Paquete VIP</td>
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
		<td class="grey"><?echo $totalmas119?></td>
		<td><?echo $totalmas119_10?></td>
		<td class="grey"><?echo $totalmas119_15_15?></td>


		<td><?echo $totalmas119_15_50?></td>
		<td><?echo $totalmas119_15_50?></td>
		<td class="grey"><?echo $VIP_25?></td>
		<td> <?echo $VIP_25_50?></td>
		<td><?echo $VIP_25_20?></td>
		<td><?echo $VIP_25_20?></td>
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


<p style="color:#000;"><i>Oferta valida por 15 días</i></p>

<div id="opciones">
			<a style="color:#000;"href="javascript:window.close()">Volver</a>
			&nbsp; &nbsp; &nbsp; 
			<a style="color:#000;" href="javascript:window.print()">Imprimir</a>
</div>