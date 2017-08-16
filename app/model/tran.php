<?

	$user="root";$pass="";$host="localhost";$db="l_g_fotografia2";$adminemail="";
	$con=mysql_connect($host,$user,$pass) or z();mysql_select_db($db,$con)or z();

	
	if(isset($_POST['guardar'])){
		if(!empty($_FILES['foto'])){
			$nombre = htmlspecialchars_decode($_FILES['foto']['name']);
			$tipo = $_FILES['foto']['type'];
			$tamano = $_FILES['foto']['size'];
			move_uploaded_file($_FILES['foto']['tmp_name'],'files/'.$nombre);
			$img_name='files/'.$nombre;
		}
		extract($_POST);
	
		mysql_query("insert into modelos set 
			cedula='$cedula'
			".(!empty($nombre)?",foto='$img_name'":"")." 
		on duplicate key update 
			cedula='$cedula'
			".(!empty($nombre)?",foto='$img_name'":"")." 
		")or die(mysql_error());
	}
	
?>


<?
		$rs=mysql_query("select * from modelos 
		".(!empty($transporte)?" where cedula='$transporte'":"")."
			
		")or die(mysql_error());
		
		$cant=mysql_num_rows($rs);
		
		if($cant<1){
		?><script>alert('No se encontraron modelos');</script><?
		}
		while($rw=mysql_fetch_array($rs)){$k++;?>
			<tr id="<?=($k%2==0?'claro':'oscuro');?>" >
				<td>
				<img src="<?=(!empty($rw['foto'])?$rw['foto']:'');?>" width="120" height="100"/></td>
				
				
			</tr>
		<?}
	?>