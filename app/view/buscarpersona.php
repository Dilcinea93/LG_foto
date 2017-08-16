<?php
include('../../config.php');
//Variable de búsqueda
$consultaBusqueda = $_POST['valorBusqueda'];

//Comprueba si $consultaBusqueda está seteado
if (isset($consultaBusqueda)) {

	//Selecciona todo de la tabla mmv001 
	//donde el nombre sea igual a $consultaBusqueda, 
	//o el apellido sea igual a $consultaBusqueda, 
	//o $consultaBusqueda sea igual a nombre + (espacio) + apellido
	$consulta = mysqli_query($conexion, "SELECT * FROM usuarios 
	WHERE ci LIKE '%$consultaBusqueda%' 
	OR nombre LIKE '%$consultaBusqueda%'
	");
?>