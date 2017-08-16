<?php
	echo HEAD;
	include('funcione.php');
?>
<head>
	
 
</head>
<h3>Registro de usuarios</h3>
<script type="text/javascript">

</script>
<div class="row">
	
	<div class="col s5 offset-s3">
		
<form id="usuario" name="usuario">

	
	<table>
		<tr>
		<td>
				<label for="ciuser">cedula</label>
				<?php ci('ciuser','ciuser')?>
			</td>
			<tr>
				
				<td>
				<label for="user">Nombre</label>
				<?php text('user','user','user')?>
			</td>
			</tr>
			<tr>
		<td>
				<label for="nombreuser">Nombre de usuario</label>
				<?php text('nombreuser','nombreuser','nombreuser')?>
		</td>

			</tr>





			<tr>
		<td>
				<label for="pregunta">Pregunta de seguridad</label>
				</td>

				</tr>
					<tr>
				<td>

				<input type="text" name="pregunta" list="preguntas">
				<datalist id="preguntas">
					<?
						$preguntas=array(
							'Lugar de nacimiento de la madre',
							'Nombre de Primera mascota',
							'Nombre de la abuela Materna',
							'Canción preferida',
							'Primera escuela donde estudio',
							'Profesor Favorito',
							'Telefono anterior',
							'Equipo de Futbol Favorito',
							'Comida Favorita'
						);
						foreach($preguntas as $pregunta){?>
							<option value="<?echo $pregunta;?>"><?echo $pregunta;?></option>
						<?}
					?>
					
				</datalist>
			</td>
</tr>
				
		
			<tr>
		<td>
				<label for="respuesta">Respuesta</label>
				<?php text('respuesta','respuesta','respuesta')?>
				
		</td>

			</tr>
			<tr>
		<td>
				<label for="user">Contraseña</label>
				<?php text('pass','pass','pass')?>
			</td>

			</tr>

			<tr>
			<td>
				<label for="user">Repita contraseña</label>
				<?php text('repass','repass','repass')?>
			</td>
			</tr>

			<tr>
			<td>

			</td>
		</tr>
	</table>


</form>
	</div>
</div>


				<button id="guardado" name="guardado" class="btn btn-large">Guardar</button>