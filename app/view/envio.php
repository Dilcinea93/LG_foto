
<link rel="stylesheet" type="text/css" href="css/style.css">

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Enviar email con archivo adjunto</title>
</head>

<body>
<?php
function comprobar_email($email) {
    return (filter_var($email, FILTER_VALIDATE_EMAIL)) ? 1 : 0;
}

if (isset($_POST['recibir'])) {

			$nombre = $_FILES['presupuesto']['name'];
			$tipo = $_FILES['presupuesto']['type'];
			$tamano = $_FILES['presupuesto']['size'];
			move_uploaded_file($_FILES['presupuesto']['tmp_name'],'correo/'.$nombre);
			
		
	
	if (comprobar_email($_POST['email'])) {
		require_once("correo/class.phpmailer.php");
		$mail = new PHPMailer();
		$mail->From = "luisgonzalezfotografia@gmail.com";
		$mail->FromName = "Luis Daniel Gonzalez";
		$mail->Subject = "Solicitud de Presupuesto";
		$mail->Body = "Hola, Gracias por interesarte en nuestro trabajo! Atendiendo su solicitud de presupuesto, detallamos la siguiente informacion";
		$mail->IsHTML(true);
		$mail->AddAddress($_POST['email'], "User Name");
		$archivo = 'correo/'.$nombre;
		$mail->AddAttachment($archivo,$archivo);
		$mail->Send();
		echo '<p>Se ha enviado correctamente el email a '.$_POST['email'].'!</p>';
	}
	else {
		echo '<p>El email introducido no es correcto!</p>';
	}
}
?>

<a href="javascript:history.back(-1)">Volver</a>
<form action="envio.php" method="post" enctype="multipart/form-data">
<h1>Envie el presupuesto adjunto en formato PDF</h1>

	<table>
	<tr>
		<td>Email del cliente:</td>
		<td><input type="text" name="email"></td>		
	</tr>
	<tr>
		<td>Presupuesto:</td>
			<td><input type="file" name="presupuesto"></td>	
		</tr>
		<tr>
			<td><input type="submit" name="recibir" value="Recibir email"/></td>
		</tr>
</table>

</form>
</body>
</html>
