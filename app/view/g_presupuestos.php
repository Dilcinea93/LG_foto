<?php
echo HEAD;
	include('app/controller/precios.php');
	include('funcione.php');
?>

<form action="app/view/presup.php" method="post">

<div id="datos">
<h4>Datos del presupuesto</h4>

<div class="row">

<u><h3>Información del cliente</h3></u>
	<div class="col s4">

		<span class="etiquetas">Nombre y apellidos del cliente:</span>

			<input type="text" id="nombre" name="nombre" placeholder="Nombre"> 
		

	</div>
	<div class="col s3">
		<span class="etiquetas">Género</span>
			<select class="browser-default" name="genero">
				<option value="m">Masculino</option>
				<option value="f">Femenino</option>
				
			</select>
	</div>


	

	<div class="col s4">
		<span class="etiquetas">Nombre de la empresa</span>
		

</br>
			<input type="text" name="empresa">
	</div>

</div>


<div class="row">


	<div class="col s4">

		<span class="etiquetas">RIF</span>
		
</br>
			<?rif2('rif')?>
	</div>
</div>

<u><h3>Información del presupuesto</h3></u>
<div class="row">
		<div class="col s4">


		<span class="etiquetas">Paquete</span>
		

</br>
			<select class="browser-default" name="paquete">
				<option value="Quinceañeras">Quinceañeras</option>
				<option value="Embarazadas">Embarazadas</option>
				<option value="Comerciales">Comerciales</option>
				<option value="Personal">Personal</option>
				<option value="Modelos">Modelos</option>
				<option value="Bodas">Bodas</option>
				<option value="Eventos">Eventos</option>
			</select>

	</div>
	<div class="col s4 ">

		<span class="etiquetas">Modalidad</span>
	
</br>
		<select class="browser-default" name="modalidad" id="modalidad">
				<option>--</option>
				<option value="exterior">Exterior</option>
				<option value="estudio">Estudio</option>
			</select>
		

		<script type="text/javascript">
		function funcion(){

		var iva= document.getElementById('civa').value;

		}
		</script>
	</div>
	<div class="col s4">

		<span class="etiquetas">Presupuesto para</span>
		
</br>

			<select class="browser-default" name="foto" id="foto">
				<option>--</option>
				<option value="foto">Fotos</option>
				<option value="video">Videos</option>
				<option value="fotoyvideo">Foto y video</option>
			</select>
	</div>



</div>
	<div class="col s4">

		<span class="etiquetas">Presupuesto por concepto de </span>
		
</br>
			<input type="text" name="concepto">
	</div>

</br>
		<?
			$rec=$conexion->query("select iva from precios");


						while($rw= $rec->fetch_array()){
							$iva= $rw['iva'];
						}
		?>

		<input type="hidden" name="civa" id="civa" value="<?php echo $iva;?>" readonly>

		<a onclick="mostra()">Generar montos</a>

</div>


	


	<div id="presup" style="display:none;">
		<?include('genera.php');?>
		
<?php
include('ofertas.php');
?>
	</div>




	</form>


