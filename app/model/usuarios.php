<?php
	include('../../config.php');
	extract($_POST);

	$conexion->query("insert into usuarios set 
			ciuser='$ciuser',
			nombre='$user',
			nombre_usuario='$nombreuser',
			contrasena='$pass',
			pregunta='$pregunta',
			respuesta='$respuesta'

			on duplicate key update


			ciuser='$ciuser',
			nombre='$user',
			nombre_usuario='$nombreuser',
			contrasena='$pass',
			pregunta='$pregunta',
			respuesta='$respuesta'
		");
?>