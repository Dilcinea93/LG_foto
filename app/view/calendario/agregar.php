
<span class="glyphicon glyphicon-chevron-left"><a href="javascript:history.back(-1);">Volver</a></span>


<meta charset="utf-8">

	<link rel="STYLESHEET" type="text/css" href="../../../lib/bootstrap/css/bootstrap.min.css">


<form id="formulario">

<?
include ('funciones.php');
	$fecha=$_GET['id'];
	$mesactual=$_GET['mes'];
	$anio=$_GET['ano'];

?>


<div class="container" >
	<div class="row">
		<div class="col s8">
			<table style="border:2px solid ;margin-left:250px;">
				<tr>
				<td>
					<label for="sel1">Evento</label>
	
					<?texto('event')?>
				</td>	

				</tr>

				<tr>
				<td>
					<label for="sel1">Detalles</label>
	
					<textarea name="detail" style="height:200px;" class="form-control">
					</textarea>
				</td>
			</tr>
			<tr>
				<td>
					<label for="sel1">Hora</label>
					<select name="hour">
						<?
							for ($i=1;$i<=12;$i++){

						?>

								<option><?php echo $i?></option>
						<?
							}
						?>
					</select>
	
	
	<select name="am">
		<option>a.m</option>
		<option>p.m</option>
	</select>
				</td>	

				</tr>
			</table>
		</div>
	</div>
</div>



<div class="col-xs-4">
	<input type="hidden" value="<?=$fecha?>" name="fecha" class="form-control centrarTexto" readonly>

		</div>


		<div class="col-xs-4">
	<input type="hidden" value="<?=$mesactual?>" name="mes" class="form-control centrarTexto" readonly>
		</div>


		<div class="col-xs-4">
	<input type="hidden" value="<?=$anio?>" name="anio" class="form-control centrarTexto" readonly>
		</div>
	



<div class="container">
	
	
             <div class="row">
                 <legend></legend>
             <br>
            <button class="btn btn-lg btn-success" style="margin-left:150px;"name="agregar" id="agregar">Guardar</button>
            </div>
	</div>

</div>

</form>	<link rel="stylesheet" type="text/css" href="Bootstrap/bootstrap/css/bootstrap.min.css">


<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	$("#agregar").click(function(event){
		event.preventDefault();
		var form= $("#formulario").serialize();

$.ajax({
	type:"POST",
	url:"insert.php",
	data:form
}).done(function(info){
	alert('Los datos han sido guardados');
	location.href('javascyp.php'); //porque no me redirecciona??? :$
});

	});
});
</script>