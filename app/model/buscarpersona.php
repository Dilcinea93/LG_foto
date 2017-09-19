<?php
include('../../config.php');


	$conexion=new mysqli('localhost','root','','l_g_fotografia2');
//Variable de búsqueda
$consultaBusqueda = $_POST['valorBusqueda'];

//Comprueba si $consultaBusqueda está seteado

if (isset($consultaBusqueda)) {

	//Selecciona todo de la tabla mmv001 
	//donde el nombre sea igual a $consultaBusqueda, 
	//o el apellido sea igual a $consultaBusqueda, 
	//o $consultaBusqueda sea igual a nombre + (espacio) + apellido
	$consulta = $conexion->query("SELECT * FROM modelos 
	WHERE cedula LIKE '%$consultaBusqueda%' 
	OR nombre LIKE '%$consultaBusqueda%'
	");



	//Obtiene la cantidad de filas que hay en la consulta
	$filas = mysqli_num_rows($consulta);

	//Si no existe ninguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
	if ($filas === 0) {

			?>
		<br><br><br>
		<p>No se ha encontrado ninguna persona relacionada con estos datos</p>
		<?php

	} else {
		//Si existe alguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
		echo 'Resultados para <strong>'.$consultaBusqueda.'</strong>';

		//La variable $resultado contiene el array que se genera en la consulta, así que obtenemos los datos y los mostramos en un bucle
		

			?>

<table class="table">
				<tr bgcolor= "#8299af" style="color:white;">
					<td><strong>Cédula</strong></td>
					<td><strong>Nombres y Apellidos</strong></td>
					<td><strong>Edad</strong></td>
					<td><strong>Ciudad</strong></td>
					<td><strong>Teléfono</strong></td>
					<td><strong>Color de piel</strong></td>
					<td><strong>Color de Pelo</strong></td>
					<td><strong>Foto</strong></td>
				</tr>

					<?php
						
						while($resultados = $consulta->fetch_array()) {
			$ci = $resultados['cedula'];
			$nombre = $resultados['nombre'];
			$edad = $resultados['edad'];
			$ciudad = $resultados['ciudad'].' - Estado '.$resultados['estado'];
			$tlf = $resultados['codi'].'-'.$resultados['telefono'];
			$pelo = $resultados['tipo_pelo'];
			$piel = $resultados['color'];
			$foto = $resultados['foto'];

			?>
				<tr>
			<td><?echo $ci?></td>
			<td><?echo $nombre?></td>
			<td><?echo $edad?></td>
			<td><?echo $ciudad?></td>
			<td><?echo $tlf?></td>
			<td><?echo $piel?></td>
			<td><?echo $pelo?></td>
			<td><img src="<?=(!empty($resultados['foto'])?$resultados['foto']:'');?>" /></td>
		</tr>
			<?		
}
					?>
</table>
			<?php

		};

	}; 
?>