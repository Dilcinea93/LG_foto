	<a onclick="datos()">Volver</a>
	
<table width="800" >

<table border="0" width="200">

	<tr>
			<th><a onclick="show('1');" style="color:#fff;">Pre-produccion</a></th>
			<th><a onclick="show('2');" style="color:#fff;">Produccion</a></th>
			<th><a onclick="show('3');" style="color:#fff;">Post-produccion</a></th>
			
			</tr>
			<tr>

			<th><a onclick="show('4');" style="color:#fff;">Gastos</a></th>
			<th><a onclick="show('5');" style="color:#fff;">Personal</a></th>
			<th><a onclick="show('6');" style="color:#fff;">Impuestos</a></th>
			
			</tr>

			<tr>
				<th><a onclick="show('77')" style="color:#fff;">Ofertas</a></th>
				<th><a onclick="show('8')" style="color:#fff;">Diseño del Presupuesto</a></th>
			</tr>
		</table>

		<div id="1">
			<table class="presupuesto" border="0">

		<tr>
			<td>&nbsp;</td>
		</tr>
				<tr>

					<th style="width:210px;"><h3><u>Preproduccion</u></h3></th>
					<th>Precio</th>
					<th>Cantidad</th>
					<th>Horas</th>
					<th>Total</th>
				</tr>	
				<tr>
					<td>Llamadas</td>
					
					
					<td>
						<?
							calculos_R_O('price1','price1',$llamadas);
						?>
					</td>
					<td><input type="text" class="smallest" name="llamada1" id="llamada1" onkeyup="calculos()"></td>
					<td><input type="text" class="smallest" name="hora1" ="hora1" id="hora1" onkeyup="calculos()"></td>
					<td><input type="text" class="smallest" name="precio1" id="precio1" onkeyup="calculos()"></td>
				</tr>
				<tr>
					<td>E-mails</td>
					<td>
							<?
							calculos_R_O('price2','price2',$emails);
						?>
					
					</td>
					<td><input type="text" class="smallest" name="llamada2" id="llamada2" onkeyup="calculos()"></td>
					<td><input type="text" class="smallest" name="hora2" id="hora2" onkeyup="calculos()"></td>
					<td><input type="text" class="smallest" name="precio2" id="precio2" onkeyup="calculos()"></td>
				</tr>
				<tr>
					<td>Reuniones con clientes</td>
					<td>
							<?
							calculos_R_O('price3','price3',$reuniones);
						?>
					
						</td>
					<td><input type="text" class="smallest" name="llamada3" id="llamada3" onkeyup="calculos()"></td>
					<td><input type="text" class="smallest" name="hora3" id="hora3" onkeyup="calculos()"></td>
					<td><input type="text" class="smallest" name="precio3" id="precio3" onkeyup="calculos()"></td>
				</tr>
				<tr>
					<td>Pruebas de maquillaje</td>
					<td>
						<?
							calculos_R_O('price4','price4',$vestuario);
						?>
					</td>
					<td><input type="text" class="smallest" name="llamada4" id="llamada4" onkeyup="calculos()"></td>
					<td><input type="text" class="smallest" name="hora4" id="hora4" onkeyup="calculos()"></td>
					<td><input type="text" class="smallest" name="precio4" id="precio4" onkeyup="calculos()"></td>
				</tr>
				<tr>
					<td>Pruebas de vestuario</td>
					<td>

						<?
							calculos_R_O('price5','price5',$maquillaje);
						?>
					</td>
					<td><input type="text" class="smallest" name="llamada5" id="llamada5" onkeyup="calculos()"></td>
					<td><input type="text" class="smallest" name="hora5" id="hora5" onkeyup="calculos()"></td>
					<td><input type="text" class="smallest" name="precio5" id="precio5" onkeyup="calculos()"></td>
				</tr>
				<tr>
					<td>Subtotal</td>
					<td></td>
					<td></td>
					<td><input type="text"  class="smallest" id="subtotal"></td>
				</tr>
				<tr>
					<td>Iva</td>
					<td></td>
					<td></td>
					<td><input type="text" class="smallest" id="iva"></td>
				</tr>
				<tr>
					<td>Total</td>
					<td></td>
					<td></td>
					<td><input type="text" class="smallest" name="total" id="total"></td>
				</tr>
			</table>
		</div>







		<div id="2" style="display:none;" style="margin-top:20px;" >
			
			<table class="presupuesto" border="0">
				<tr>
					<th><h3><u>Producci&oacute;n</u></h3></th>
					
					<th>Precio</th>
					<th>Horas</th>
					<th>Total</th>
				</tr>	
				<tr>
					<td>Montaje</td>
					<td>
						<?
							calculos_R_O('price','price21',$montaje);
						?>
					<td><input type="text" id="horas21" onkeyup="calculos2()"></td>
					<td><input type="text" id="precio21" onkeyup="calculos2()"></td>
				</tr>
				<tr>
					<td>Horas de toma</td>
					<td>


						<?
							calculos_R_O('price','price22',$horas);
						?>
					</td>
					<td><input type="text" id="horas22" onkeyup="calculos2()"></td>
					<td><input type="text" id="precio22" onkeyup="calculos2()"></td>
				</tr>
				<tr>
					<td>Desmontaje</td>
					<td>

						<?
							calculos_R_O('price','price23',$desmontaje);
						?>
					</td>
					<td><input type="text" id="horas23" onkeyup="calculos2()"></td>
					<td><input type="text" id="precio23" onkeyup="calculos2()"></td>
				</tr>
				<tr>
					<td>Subtotal</td>
					<td></td>
					<td></td>
					<td><input type="text" id="subtotal2"></td>
				</tr>
				<tr>
					<td>Iva</td>
					<td></td>
					<td></td>
					<td><input type="text" id="iva2"></td>
				</tr>
				<tr>
					<td>Total</td>
					<td></td>
					<td></td>
					<td><input type="text" name="total2" id="total2"></td>
				</tr>
			</table>
		</div>





		<div id="3" style="display:none;" style="margin-top:20px;">
			<table class="presupuesto" border="0">
				<tr>
					<th><h3><u>Post-producci&oacute;n</u></h3></th>
					<th>Precio</th>
					<th>Horas</th>
					<th>Total</th>

				</tr>	
				<tr>
					<td>Retoque</td>

					<td>

						<?
							calculos_R_O('price','price31',$retoque);
						?>
					</td>
					<td><input type="text" id="horas31" onkeyup="calculos3()"></td>
					<td><input type="text" id="precio31"></td>
				</tr>
				<tr>
					<td>Edicion de video</td>
					<td>

						<?
							calculos_R_O('price','price32',$edicion);
						?>
					</td>
					<td><input type="text" id="horas32" onkeyup="calculos3()"></td>
					<td><input type="text" id="precio32"></td>
				</tr>
				<tr>
					<td>Correcciones</td>
					<td>

						<?
							calculos_R_O('price','price33',$correccion);
						?>
					</td>
					<td><input type="text" id="horas33" onkeyup="calculos3()"></td>
					<td><input type="text" id="precio33"></td>
				</tr>
				<tr>
					<td>Reuniones con clientes</td>
					<td>

						<?
							calculos_R_O('price','price34',$reuniones_clientes);
						?>
					</td>
					<td><input type="text" id="horas34" onkeyup="calculos3()"></td>
					<td><input type="text" id="precio34"></td>
				</tr>
				<tr>
					<td>Entrega de material</td>
					<td>

						<?
							calculos_R_O('price','price35',$entrega);
						?>
					</td>
					<td><input type="text" id="horas35" onkeyup="calculos3()"></td>
					<td><input type="text" id="precio35"></td>
				</tr>
				<tr>
					<td>Llamadas</td>
					<td>


						<?
							calculos_R_O('price','price36',$llamadas_post);
						?>
					</td>
					<td><input type="text" id="horas36" onkeyup="calculos3()"></td>
					<td><input type="text" id="precio36"></td>
				</tr>
				<tr>
					<td>E-mails</td>
					<td>

						<?
							calculos_R_O('price','price37',$email_post);
						?>
	</td>
					<td><input type="text" id="horas37" onkeyup="calculos3()"></td>
					<td><input type="text" id="precio37"></td>
				</tr>
				<tr>
					<td>Subtotal</td>
					<td></td>
					<td><input type="text" id="subtotal3"></td>
				</tr>
				<tr>
					<td>Iva</td>
					<td></td>
					<td><input type="text" id="iva3"></td>
				</tr>
				<tr>
					<td>Total</td>
					<td></td>
					<td><input type="text" name="total3" id="total3"></td>
				</tr>
				<tr>
					<td>
						<input type="hidden" name="fecha">
					</td>
				</tr>
			</table>

		</div>



	<div id="4" style="display:none;" style="margin-top:20px;">
			
<table class="presupuesto" border="0">

<tr>
<td colspan="4"><h4 align="center">GASTOS GENERALES</h4></td>
</tr>
				<tr>
					<th><h3><u>Gastos</u></h3></th>
					<th>Precio</th>
					<th>Horas</th>
					<th>Total</th>

				</tr>	
				<tr>
					<td>Transporte</td>

					<td>

						<?
							calculos_R_O('price','price41',$transporte);
						?>
					</td>
					<td><input type="text" id="horas41" onkeyup="calculos4()"></td>
					<td><input type="text" id="precio41"></td>
				</tr>
				<tr>
					<td>Refrigerios</td>
					<td>

						<?
							calculos_R_O('price','price42',$refrigerio);
						?></td>
					<td><input type="text" id="horas42" onkeyup="calculos4()"></td>
					<td><input type="text" id="precio42"></td>
				</tr>
				<tr>
					<td>Equipos</td>
					<td>

						<?
							calculos_R_O('price','price43',$equipo);
						?>
					</td>
					<td><input type="text" id="horas43" onkeyup="calculos4()"></td>
					<td><input type="text" id="precio43"></td>
				</tr>
				<tr>
					<td>Alquileres</td>
					<td>

						<?
							calculos_R_O('price','price44',$alquiler);
						?>
					</td>
					<td><input type="text" id="horas44" onkeyup="calculos4()"></td>
					<td><input type="text" id="precio44"></td>
				</tr>
				<tr>
					<td>Subtotal</td>
					<td></td>
					<td><input type="text" id="subtotal4"></td>
				</tr>
				<tr>
					<td>Iva</td>
					<td></td>
					<td><input type="text" id="iva4"></td>
				</tr>
				<tr>
					<td>Total</td>
					<td></td>
					<td><input type="text" name="total4" id="total4"></td>
				</tr>
				<tr>
					<td>
						<input type="hidden" name="fecha">
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
					<th>Horas</th>
					<th>Total</th>

				</tr>	
				<tr>
					<td>Fotografos</td>

					<td>

						<?
							calculos_R_O('price','price51',$fotografo);
						?>
					</td>
					<td><input type="text" id="horas51" onkeyup="calculos5()"></td>
					<td><input type="text" id="precio51"></td>
				</tr>
				<tr>
					<td>Camarografos</td>
					<td>

						<?
							calculos_R_O('price','price52',$camarografo);
						?>
					</td>
					<td><input type="text" id="horas52" onkeyup="calculos5()"></td>
					<td><input type="text" id="precio52"></td>
				</tr>
				<tr>
					<td>Asistentes</td>
					<td>
						<?
							calculos_R_O('price','price53',$asistente);
						?>
					</td>
					<td><input type="text" id="horas53" onkeyup="calculos5()"></td>
					<td><input type="text" id="precio53" name="precio53"></td>
				</tr>
				<tr>
					<td>Maquilladores</td>
					<td>

						<?
							calculos_R_O('price','price54',$maquillaje);
						?></td>
					<td><input type="text" id="horas54" onkeyup="calculos5()"></td>
					<td><input type="text" id="precio54"></td>
				</tr>
				<tr>
					<td>estilistas</td>
					<td>

						<?
							calculos_R_O('price','price55',$estilista);
						?>
					</td>
					<td><input type="text" id="horas55" onkeyup="calculos5()"></td>
					<td><input type="text" id="precio55" name="precio55"></td>
				</tr>
				<tr>
					<td>Coordinadores</td>
					<td>

						<?
							calculos_R_O('price','price56',$coordinador);
						?>
					</td>
							<td><input type="text" id="horas56" onkeyup="calculos5()"></td>
			<td><input type="text" id="precio56"></td>
				</tr>
				<tr>
					<td>Guionista</td>
					<td>
						<?
							calculos_R_O('price','price57',$guionista);
						?>
					</td>
					<td><input type="text" id="horas57" onkeyup="calculos5()"></td>
					<td><input type="text" id="precio57"></td>
				</tr>
				<tr>
					<td>Subtotal</td>
					<td></td>
					<td><input type="text" id="subtotal5"></td>
				</tr>
				<tr>
					<td>Iva</td>
					<td></td>
					<td><input type="text" id="iva5"></td>
				</tr>
				<tr>
					<td>Total</td>
					<td></td>
					<td><input type="text" name="total5" id="total5"></td>
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
					<td><input type="text" class="smallest" name="price" id="p1" value="" onkeyup="calculos6()"></td>
				
				</tr>
				<tr>
					<td>Cliente complicado</td>
					<td><input type="text" class="smallest" name="price" id="p2" value="" onkeyup="calculos6()"></td>
					
				</tr>
				<tr>
					<td>Trabajo complejo</td>
					<td><input type="text" class="smallest" id="p3" value="" onkeyup="calculos6()"></td>
					
				</tr>
				<tr>
					<td>Administrador</td>
					<td><input type="text" class="smallest" name="p4" id="p4" value="" onkeyup="calculos6()"></td>
					
				</tr>
				<tr>
					<td>Organizador</td>
					<td><input type="text" class="smallest" name="p5" id="p5" value="" onkeyup="calculos6()"></td>
				
				</tr>
				<tr>
					<td>Subtotal</td>
					<td><input type="text" class="smallest" id="subtotal6"></td>
				</tr>
				<tr>
					<td>Iva</td>
					<td><input type="text" class="smallest" id="iva6"></td>
				</tr>
				<tr>
					<td>Total</td>
					<td><input type="text"  class="smallest" name="total6" id="total6"></td>
				</tr>
				<tr>
					<td>
						<input type="hidden" name="fecha">
					</td>
				</tr>

</table>

		</div>



<div id="8" style="display:none;">
	
<iframe src="app/view/diseno.php" style="width:90%;height:900px;border:1px solid transparent;"></iframe>
</div>