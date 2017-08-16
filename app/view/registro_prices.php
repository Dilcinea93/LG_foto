<?
	include('funcione.php');
	include('app/controller/precios.php');
?>


<h2>Registro de precios</h2>
<form id="precios">


<div clas="row">
	<div class="col s3 offset-s7">
		<label>IVA</label>
		<?
			calculos('civa','civa',$iva);
		?>
</div>
</div>
<table width="800" style="margin-top:30px;">
			<tr>
			<th><a onclick="mostrar('1');" style="color:#fff;">Pre-produccion</a></th>
			<th><a onclick="mostrar('2');" style="color:#fff;">Produccion</a></th>
			<th><a onclick="mostrar('3');" style="color:#fff;">Post-produccion</a></th>
			
			</tr>
			<tr>
							 <?// ID del elemento q quiero hacer visible?>
			<th><a onclick="mostrar('4');" style="color:#fff;">Gastos</a></th>
			<th><a onclick="mostrar('5');" style="color:#fff;">Personal</a></th>
			<th><a onclick="mostrar('6');" style="color:#fff;">Impuestos</a></th>
			
			</tr>
		</table>


		<div id="1">
			<table class="presupuesto" >
				<tr>
					<th><h3><u>Preproduccion</u></h3></th>
					<th>Precio</th>
				</tr>	

				<tr>
					<td>
						<?
							hiden('id','id');
						?>
				</tr>
				<tr>
					<td>Llamadas</td>
					
					<td>
						<?
							calculos('llamadas_p','price',$llamadas);
						?>
				</tr>
				<tr>
					<td>E-mails</td>
					<td>


						<?
							calculos('email_p','price',$emails);
						?>

					</td>
				</tr>
				<tr>
					<td>Reuniones con clientes</td>
					<td>


						<?
							calculos('reunion_p','price',$reuniones);
						?>
					</td>
				</tr>
				<tr>
					<td>Pruebas de vestuario</td>
					<td>
						
						<?
							calculos('vestuario_p','price',$vestuario);
						?>
					</td>
				</tr>
				<tr>
					<td>Pruebas de maquillaje</td>
					<td>
						
						<?
							calculos('maquillaje_p','price',$maquillaje);
						?>
					</td>
				</tr>
				<tr>
					<td>Extras</td>
					<td>
						
						<?
							calculos('extras_p','price',$extras);
						?>
					</td>
				</tr>
			</table>
		</div>







		<div id="2" style="display:none;" style="margin-top:20px;" >
			
			<table class="presupuesto" >
				<tr>
					<th><h3><u>Produccion</u></h3></th>
					<th>Precio</th>
				</tr>	
				<tr>
					<td>Montaje</td>
					<td>
						<?
							calculos('montaje_p','price',$montaje);
						?>
					</td>
				</tr>
				<tr>
					<td>Horas de toma</td>
					<td>

						<?
							calculos('horas_p','price',$horas);
						?>
					</td>
				</tr>
				<tr>
					<td>Desmontaje</td>
					<td>

					
						<?
							calculos('desmontaje_p','price',$desmontaje);
						?>
						</td>
				</tr>
				<tr>
					<td>Extras</td>
					<td>

					
						<?
							calculos('extra_p_prod','price',$extras_produccion);
						?></td>
				</tr>
				
			</table>
		</div>





		<div id="3" style="display:none;" style="margin-top:20px;">
			<table class="presupuesto" >
				<tr>
					<th><h3><u>Post-produccion</u></h3></th>
					<th>Precio</th>
				</tr>	
				<tr>
					<td>Retoque</td>

					<td>
						
						<?
							calculos('retoque_p','price',$retoque);
						?>
					</td>
				</tr>
				<tr>
					<td>Edicion de video</td>
					<td>
					
						<?
							calculos('edicion_p','price',$edicion);
						?>
					</td>
				</tr>
				<tr>
					<td>Correcciones</td>
					<td>

						<?
							calculos('correccion_p','price',$correccion);
						?>
					</td>
				</tr>
				<tr>
					<td>Reuniones con clientes</td>
					<td>
						<?
							calculos('reunion_c_p','price',$reuniones_clientes);
						?>
					</tr>
				<tr>
					<td>Entrega de material</td>
					<td>

						<?
							calculos('entrega_p','price',$entrega);
						?>
					</td>
				</tr>
				<tr>
					<td>Llamadas</td>
					<td>
					
						<?
							calculos('llamada_post_p','price',$llamadas_post);
						?></td>
				</tr>
				<tr>
					<td>E-mails</td>
					<td>

						<?
							calculos('email_p_post','price',$email_post);
						?></td>
				</tr>
				
			</table>
		</div>



	<div id="4" style="display:none;" style="margin-top:20px;">
			
<table class="presupuesto" border="0">
				<tr>
					<th><h3><u>Gastos</u></h3></th>
					<th>Precio</th>

				</tr>	
				<tr>
					<td>Transporte</td>

					<td>
						<?
							calculos('transporte','price',$transporte);
						?>
					</td>
					
				</tr>
				<tr>
					<td>Refrigerios</td>
					<td>

						<?
							calculos('refrigerio','price',$refrigerio);
						?>
					</td>
				
				</tr>
				<tr>
					<td>Equipos</td>
					<td>
					
						<?
							calculos('equipo','price',$equipo);
						?>	
					</td>
				
				</tr>
				<tr>
					<td>Alquileres</td>
					<td>
						<?
							calculos('alquiler','price',$alquiler);
						?>
							</td>
					
				</tr>
			</table>

		</div>



<div id="5" style="display:none;" style="margin-top:20px;">
			
<table class="presupuesto" border="0">

<tr>
<td colspan="4"><h4 align="center">GASTOS DE PERSONAL</h4></td>
</tr>
				<tr>
					<th><h3><u>Gastos II</u></h3></th>
					<th>Precio</th>
				</tr>	
				<tr>
					<td>Fotografos</td>

					<td>

						<?
							calculos('fotografo','price',$fotografo);
						?>
					</td>
				</tr>
				<tr>
					<td>Camarografos</td>
					<td>

						<?
							calculos('camarografo','price',$camarografo);
						?>
					</td>
			</tr>
				<tr>
					<td>Asistentes</td>
					<td>

						<?
							calculos('asistente','price',$asistente);
						?>
					</td>
				</tr>
				<tr>
					<td>Maquilladores</td>
					<td>

						<?
							calculos('maquillador','price',$maquillador);
						?>
					</td>
				</tr>
				<tr>
					<td>estilistas</td>
					<td>

						<?
							calculos('estilista','price',$estilista);
						?>
					</td>
			</tr>
			<tr>
					<td>Guionista</td>
					<td>

						<?
							calculos('guionista','price',$guionista);
						?>
					</td>
			</tr>
				<tr>
					<td>Coordinadores</td>
					<td>

						<?
							calculos('coordinador','price',$coordinador);
						?>
					</td>
			</tr>
				<tr>
					<td>Extras</td>
					<td>

						<?
							calculos('extra_2','price',$extra_2);
						?>
					</td>
				
				</tr>
				<tr>
					<td>
						<input type="hidden" name="fecha">
					</td>
				</tr>
			</table>

		</div>




	<div id="6" style="display:none;" style="margin-top:20px;">
			
<table class="presupuesto" border="0">

<tr>
<td colspan="4"><h4 align="center">IMPUESTOS</h4></td>
</tr>
				<tr>
					<th><h3><u>Impuestos</u></h3></th>
					<th>Precio</th>

				</tr>	
				<tr>
					<td>Experiencia</td>
					<td>
						
						<?
							calculos('experiencia','price',$experiencia);
						?>
					</td>
				
				</tr>
				<tr>
					<td>Cliente complicado</td>
					<td>


						<?
							calculos('complicado','price',$complicado);
						?>
					</td>
					
				</tr>
				<tr>
					<td>Trabajo complejo</td>
					<td>

						<?
							calculos('complejo','price',$complejo);
						?>
					</td>
				
				</tr>
				<tr>
					<td>Administrador</td>
					<td>

						<?
							calculos('administrador','price',$administrador);
						?>
					</td>
					
				</tr>
				<tr>
					<td>Organizador</td>
					<td>

						<?
							calculos('organizador','price',$organizador);
						?>
					</td>
				
				</tr>
				
				<tr>
					<td>
						<input type="hidden" name="fecha">
					</td>
				</tr>

</table>



<input type="button" id="registro" name="registro_p" class="btn btn-large" value="Actualizar">

</form>

</br>

