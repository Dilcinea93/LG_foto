<?
include('../../config.php');
	
extract($_POST);
			$nombre = htmlspecialchars_decode($_FILES['foto']['name']);
			$tipo = $_FILES['foto']['type'];
			$tamano = $_FILES['foto']['size'];
			move_uploaded_file($_FILES['foto']['tmp_name'],'files/'.$nombre);
			$img_name='app/model/files/'.$nombre;


		
	$conexion->query("insert into modelos set
			cedula='$cedula',
			nombre='$nombres',
			edad='$edad',
			estado='$pais3',
			ciudad='$provincia3',
			email='$email',
			telefono='$telefono',
			codi='$codi',
			naci='$naci',
			metro='$metro',
			altura='$altura',
			color='$color',
			tipo_pelo='$tipo_pelo',
			busto='$busto',
			cintura='$cintura',
			cadera='$cadera',
			color_pelo='$color_pelo'
			".(!empty($nombre)?",foto='$img_name'":"")." 
		");
	?>
	<script type="text/javascript">
	alert('Se han guardado los datos con exito');
	location.href="../../index2?id=models";
	</script>
	<?
	?>
	