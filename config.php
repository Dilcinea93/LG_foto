<?
	$conexion=new mysqli('localhost','root','','l_g_fotografia2');
$_c= 'app/controller/';
$_cp= 'app/controller/login.php';
$_m='app/model/';
$_v='app/view/';
$_i='lib/images/';
$_css='lib/css/style.css';
$_b='lib/bootstrap/css/bootstrap.min.css';
$_js='lib/js/funciones.js'; //ruta de funciones
$_materialcss='lib/MaterializeCss/materialize/css/materialize.min.css';
$_materialjs='lib/MaterializeCss/materialize/js/materialize.min.js';
$_escrip='jquery.min.js'; //ruta de jquery
$_jql= 'lib/js/funciones.js';


define("HEAD",'
<html lang="es">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 

		<link rel="stylesheet" media="screen" href="'.$_materialcss.'">
	<link rel="shortcat icon" href="lib/images/camera.jpg">
		<link rel="stylesheet" media="screen" href="'.$_css.'">
		<link rel="stylesheet" media="screen" href="'.$_b.'">
		<script src="'.$_js.'"></script>
		<script src="'.$_materialjs.'"></script>
		<script src="'.$_escrip.'"></script> 
	</head>');
?>