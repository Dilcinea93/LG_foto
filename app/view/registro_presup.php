<?
echo HEAD;

//Ejemplo curso PHP aprenderaprogramar.com
$time = time();

?>

<h2 align="center">Registrar presupuestos</h2>



<div id="contenudo"  >
	<div id="general">
	<form id="formulario" method="post">
<table id="g_presupuestos" border="0">
	<tr>
		<td>Cedula del cliente</td>
		<td>
			<input type="text" id="cedula" name="cedula" placeholder="cedula"></td>
	</tr>	
	<tr>
		<td>Nombre del cliente:</td>
		<td><input type="text" id="dato" name="nombre_p" style="width:200px;height:40px;" readonly></div></td>
	</tr>
	<tr>
		<td>Razon social:</td>
		<td><input type="text" id="razon" name="razon"style="width:200px;height:40px;" readonly></div></td>
	</tr>
</table>
	
<table id="presupuestos" border="0">
	<tr>
		<td colspan="4"><h3 align="center"><h2>Detalles del presupuesto</h2></td>
	</tr>
	<tr>
		<td>Paquete</td>
		<td>
			<select name="paquete" style="width:200px;"id="presup"class="browser-default">
				<option>Quinceañeras</option>
				<option>Embarazadas</option>
				<option>Comerciales</option>
				<option>Personal</option>
				<option>Modelos</option>
				<option>Bodas</option>
				<option>Eventos</option>
			</select>
		</td>

<td>Oferta</td>
		<td>
			<select name="oferta" id="oferta" style="width:130px;"class="browser-default">
				<option>Premium</option>
				<option>Platinum</option>
				<option>VIP</option>
			</select>
		</td>
		

		</tr>

		<tr>
		


		</tr>
		<td>Presupuesto para </td>
		<td>

			<select class="browser-default" style="width:130px;" name="foto">
				<option>Foto</option>
				<option>Video</option>
				<option>Foto y video</option>
			</select>
		</td>

		<td>Modo</td>
		<td>
			<select class="browser-default" style="width:130px;" name="modo">
				<option>Estudio</option>
				<option>Exterior</option>
			</select>
		</td>

	</tr>

	<tr>
		<td>Precio</td>
		<td><input type="text" id="precio" name="precio"></td>


		<td>Fecha</td>


		<td><input type="text" name="fecha" value="<?=date("d/m/Y",$time);?>" readonly></td>
		



	</tr>
	<tr>
		
		<td>


		</td>
	</tr>
	<tr>

	<td colspan="3"></td></tr>

</table>




		<input type="submit" name="registrar" id="r_presup" value="Registrar" class="btn btn-large">
</div>
</div>
