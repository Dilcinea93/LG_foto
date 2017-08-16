<?php
///////////////////////////////////////////////////////////////////////////////////////////////
//Libreria para mostrar un calendario y obtener una fecha
//
//La página que llame a esta libreria debe contener un formulario con tres campos donde se introducirá el día el mes y el año que se desee
//Para que este calendario pueda actualizar los campos de formulario correctos debe recibir varios datos (por GET)
//formulario (con el nombre del formulario donde estan los campos
//dia (con el nombre del campo donde se colocará el día)
//mes (con el nombre del campo donde se colocará el mes)
//ano (con el nombre del campo donde se colocará el año)
///////////////////////////////////////////////////////////////////////////////////////////////
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<meta charset="utf-8">

	<title>Calendario PHP</title>
	<link rel="STYLESHEET" type="text/css" href="estilo.css">
	<link rel="STYLESHEET" type="text/css" href="../../../lib/bootstrap/css/bootstrap.min.css">
<style>
	body{
		background:#cfcfcf;
	}
</style>
	<script>
		function devuelveFecha(dia,mes,ano){
			//Se encarga de escribir en el formulario adecuado los valores seleccionados
			//también debe cerrar la ventana del calendario
			var formulario_destino = '<?php echo $_GET["formulario"]?>'
			
			var campo_destino = '<?php echo $_GET["nomcampo"]?>'
					
			//meto el dia
			eval ("opener.document." + formulario_destino + "." + campo_destino + ".value='" + ano + "-" + mes + "-" + dia + "'")
			window.close()
		}
	</script>
</head>

<body>








<div align="center">
<?php
require ("calendario.php");
$dia_solo_hoy = date("d"); //devuelve la fecha de hoy (dia);

//
if (!$_POST && !isset($_GET["nuevo_mes"]) && !isset($_GET["nuevo_ano"])){
	$mes = date('n'); // devuelve es numero del mes
	$ano = date("Y");  //devuelve el año
}elseif ($_POST) {
	$mes = $_POST["nuevo_mes"];
	$ano = $_POST["nuevo_ano"];
}else{
	$mes = $_GET["nuevo_mes"];
	$ano = $_GET["nuevo_ano"];
}
	
mostrar_calendario($mes,$ano);
formularioCalendario($mes,$ano);
?>
</div>
</body>
</html>