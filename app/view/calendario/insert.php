<?
	include('conexion.php');
	extract($_POST);

	$conexion->query("insert into eventos set 

		evento='$event',
		detalles='$detail',
		hora='$hour',
		fecha='$fecha',
		mes='$mes',
		am='$am',
		ano='$anio'
	");

?>