<?

include('conexion.php');

	$fecha=$_GET['id'];
	$mess=$_GET['mes'];
	$ano=$_GET['ano'];
$query=$conexion->query("select * from eventos where fecha='$fecha' and mes='$mess' and ano='$ano'");

			
?>





	<link rel="STYLESHEET" type="text/css" href="../../../lib/bootstrap/css/bootstrap.min.css">
<meta charset="utf-8">

<span class="glyphicon glyphicon-chevron-left"><a href="javascript:history.back(-1);">Volver</a></span>


	<form id="form">

<input type="hidden" name="fecha" value="<?echo $fecha?>">
<input type="hidden" name="meses" value="<?echo $mess?>">
<input type="hidden" name="anio" value="<?echo $ano?>">
		
		<table id="listado" class="table table-condensed" style="margin-left:100px;">

	<tr id="dias" bgcolor= "#8299af" style="color:white;">
		<td><h3>Evento</h3></td>
		<td><h3>Detalles</h3></td>
		<td><h3>Hora</h3></td>
	</tr>

<?
	while($rw=$query->fetch_array()){
					$fecha=$rw['fecha'];
					$evento=$rw['evento'];
					$detalles= $rw['detalles'];
					$hora=$rw['hora'];
					$mes=$rw['mes'];
					$ano=$rw['ano'];
					$am=$rw['am'];

?>


<tr>
	<td><?echo $evento?></td>
	<td><?echo $detalles?></td>
	<td><?echo $hora.' '.$am?></td>
	<td><span class="red"><i><input type="submit" id="borrar" class="btn btn-danger"value="Eliminar"></i></span></td>
</tr>
<?
				}

?>

	</table>
</form>


<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#borrar").click(function(event){
				event.preventDefault();

					var form= $("#form").serialize();
				$.ajax({
					url:"borrar.php",
					type:"post",
					data:form
				}).done(function(info){
					alert('Se ha eliminado esta tarea');
				});
			});
		});
	</script>