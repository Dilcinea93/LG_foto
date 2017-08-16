<html>
<head>
	<title>Luis Gonzales Fotografía</title>
</head>
<body>
<div class="row">
	<div class="container">
		<div id="form">
			<div id="into">

				<img src="<?=$_i.'logof.jpg'?>">
				<h4>Inicia sesión</h4>

				<form id="formul" action="<?=$_cp?>" method="post">
					<table>
						<tr>
							<td>
								Nombre de usuario
							</td>
							<td>
								<input type="text" name="user" id="username">
							</td>
						</tr>
						<tr>
							<td>
								Contraseña
							</td>
							<td>
								<input type="password" name="password" id="password" placeholder="*****">
							</td>
						</tr>
					</table>
					<button id="ingresar" name="login" class="btn btn-large indigo darken-1">Ingresar</button>
				</form>

			</div>
		</div>
	</div> 
</div>

</body>
</html>
