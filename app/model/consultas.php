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
	$consulta = $conexion->query("SELECT * FROM clients 
	WHERE id_c LIKE '%$consultaBusqueda%' 
	OR nombre_c LIKE '%$consultaBusqueda%'
	");



	//Obtiene la cantidad de filas que hay en la consulta
	$filas = mysqli_num_rows($consulta);

	$result=$conexion->query("select id,nombre from estados e,clients c where c.estado=e.id");
	while($rs=$result->fetch_array()){
		$estado=$rs['nombre'];
	}

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

<table class="table" style="width:100%;">
				<tr bgcolor= "#8299af" style="color:white;">
					<td><strong>Cédula</strong></td>
					<td><strong>Nombre</strong></td>
					<td><strong>Ciudad</strong></td>
					<td><strong>Teléfono</strong></td>
					<td><strong>Razon social</strong></td>
					<td><strong>RIF</strong></td>
					<td><strong>Email</strong></td>
				</tr>

					<?php
						
						while($resultados = $consulta->fetch_array()) {
			$naci = $resultados['naci'];
			$ci = $resultados['id_c'];
			$nombre = $resultados['nombre_c'];
			$ciudad = $resultados['ciudad'].' - Estado '.$estado;
			$tlf = $resultados['cod_a'].'-'.$resultados['telefono_c'];
			$razon = $resultados['razon_s_c'];
			$rif = $resultados['rif'];
			$email = $resultados['email_c'];

			?>
				<tr>
			<td><?echo $naci."-".$ci?></td>
			<td><?echo $nombre?></td>
			<td><?echo $ciudad?></td>
			<td><?echo $tlf?></td>
			<td><?echo $razon?></td>
			<td><?echo $rif?></td>
			<td><?echo $email?></td>
		</tr>
			<?		
}
					?>
</table>
			<?php

		};

	}; 
?>