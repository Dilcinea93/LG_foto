<?
echo HEAD;
/*
	si visitas localhost/2016/luisgonzales/app.php obviamente solo se mostrara el echo HEAD...
	el INDEX es el que contiene las cabeceras...
	y si tambien contiene a este codigo, despues de las cabeceras se mostrara el css..
	pero tienes que visitar el INDEX... (q contiene a app (y a config))

	recuerda que app (o el archivo que sea como app) contendra la plantilla.. Todo el diseño de 
	alrededor... 
*/
?><html>
<head>
	<title>Luis Gonzales Fotografía</title>
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
</head>

<style type="text/css">
	input[type=text]{

		color:#000;
	}
</style>

<script type="text/javascript">
	
	$(document).ready(function(){
		$("#guardado").click(function(event){
			var nombre= prompt('Ingrese su nombre de usuario','');

		});
	});
</script>

	
<body>

<div class="row">
	<div class="container" >
		<div id="form">
			<div id="into" >

<div class="container">

				<img src="<?=$_i.'logof.jpg'?>" style="width:750px;">
</div>

				<form id="formul" action="<?=$_cp?>" method="post" name="form">
					<div class="row">
						<div class="col s12 offset-s4">
							<div class="row">
								<div class="col s4">
									<label for="username"><h2 style="color:#000;">Nombre de usuario</h2></label>

									<input type="text" name="user" id="username">
								</div>
							</div>
							<div class="row">
								<div class="col s4">
									<label for="username"><h2 style="color:#000;">Contraseña</h2></label>

									<input type="password" name="password" id="password" placeholder="*****">
								</div>

							</div>
							<div class="row">
								<div class="col s4">
									<button id="ingresar" name="login" class="btn btn-large">Ingresar</button>
								</div>
								
							</div>

							<div class="row">
								<div class="col s4">
							<h5><a id="guardado"  onclick="
										$.post('repass.php?ci='+prompt('Ingrese el nombre de usuario',''),function(data){
										$('.result').html(data);
										});
									
								"

							   >Olvidaste la contraseña?</a></h5>


									<input type="hidden" name="intento">
				<div class="result"><div>
								</div>
								
							</div>

						</div>

					</div>

					


					
				</form>

			</div>
		</div>
	</div> 
</div>

</body>
</html>


