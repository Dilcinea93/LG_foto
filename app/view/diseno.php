
<center>
	
	<div style="padding:40px;">
	<h5>Elija las imagenes de portada y contraportada del presupuesto. Al finalizar el presupuesto podrá ser enviado por correo.</h5>

<center>
	<h1>Arme el presupuesto</h1>
</center>
<form action="dompdf/proceso.php" method="post" enctype="multipart/form-data">
	<table>

		<tr>
			<td>Elija una imagen para la portada</td>
			<td><input type="file" name="portada"></td>
		</tr>
		<tr>
			<td>Elija una imagen para la contraportada</td>
			<td><input type="file" name="contraportada"></td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="enviar" value="Generar PDF">
			</td>
		</tr>
	</table>

	<span><p><b>Nota:</b> <h5><i>Descargue la versión PDF generada por el sistema. Luego presione el botón <img> para enviar el PDF por correo a la dirección del cliente especificado. </i></h5></p></span>

<button>
	<a href="envio.php">Enviar presupuesto por correo</a>
</button>
	
</form>
	</div>
</center>


