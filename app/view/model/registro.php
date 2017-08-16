<?

include('../conexion2.php');

	extract($_POST);
	if(isset($_POST['guardar'])){
		if(!empty($_FILES['tran_tran_img'])){
			$nombre = htmlspecialchars_decode($_FILES['tran_tran_img']['name']);
			$tipo = $_FILES['tran_tran_img']['type'];
			$tamano = $_FILES['tran_tran_img']['size'];
			move_uploaded_file($_FILES['tran_tran_img']['tmp_name'],'files/'.$nombre);
			$img_name='app/view/model/files/'.$nombre;
		}
	
		mysql_query("insert into bien_tran_tran set 
			tran_tran_plac='$tran_tran_plac'
			".(!empty($nombre)?",tran_tran_img='$img_name'":"")." 
		on duplicate key update 
			tran_tran_plac='$tran_tran_plac'
			".(!empty($nombre)?",tran_tran_img='$img_name'":"")." 
		")or die(mysql_error());
	}
	
?>