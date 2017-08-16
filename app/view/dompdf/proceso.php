<link rel="stylesheet" type="text/css" href="css/style.css">
<?
include('../config.php');
if(isset($_POST['enviar'])){

extract($_POST);
		if(!empty($_FILES['portada'])){
			
			$nombre = htmlspecialchars_decode($_FILES['portada']['name']);
			$tipo = $_FILES['portada']['type'];
			$tamano = $_FILES['portada']['size'];
			move_uploaded_file($_FILES['portada']['tmp_name'],'files/'.$nombre);
			$img_name='files/'.$nombre;
		}

		if(!empty($_FILES['contraportada'])){

			$nombre = htmlspecialchars_decode($_FILES['contraportada']['name']);
			$tipo = $_FILES['contraportada']['type'];
			$tamano = $_FILES['contraportada']['size'];
			move_uploaded_file($_FILES['contraportada']['tmp_name'],'files/'.$nombre);
			$img2_name='files/'.$nombre;
		}
		

		?>
			<script type="text/javascript">
				
				location.href="../diseno.php";
				var url='pdf.php?name=<?=$img_name?>&name2=<?=$img2_name?>';
				window.open(url, '_blank');
			</script>
		<?
	}
?>

