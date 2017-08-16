<?
	include('config.php');

	$conexion=new mysqli('localhost','root','','l_g_fotografia2');
	if(!empty($_GET['ci'])){
		$result=$conexion->query("select * from usuarios where nombre_usuario='".$_GET['ci']."'")or die(mysql_error());
		if($row=$result->fetch_assoc()){
		
			echo'
			<input type="hidden" name="respuesta" value="'.$row['respuesta'].'" />
			<input type="hidden" name="shadow" value="'.$row['contrasena'].'" />
			<script>
				var intento=prompt(\''.$row['pregunta'].'\',\'\');
				if(intento==document.form.respuesta.value){
					alert(\'Su Contraseña es: \'+document.form.shadow.value+\'\\nPor Seguridad Modifiquela\');
				}else{
					alert("La respuesta que ha introducido no coincide con la respuesta de seguridad");
				}
			</script>';
		}else{

			echo '<script>
				alert("No hay ningun usuario con estos datos");
			</script>';
		}
	}
	else{
		echo '
			<script>

			alert("Especifique un nombre de usuario para realizar la busqueda");
			</script>
		';
	}



	
?>
