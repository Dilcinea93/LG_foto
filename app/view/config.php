<?
	$conexion=new mysqli('localhost','root','','l_g_fotografia2');
$_c= 'app/controller/';
$_cp= 'app/controller/login.php';
$_m='app/model/';
$_v='app/view/';
$_i='lib/images/';
$_css='../../lib/css/';
$_js='lib/js/';
$_materialcss='lib/MaterializeCss/materialize/css/';
$_materialjs='lib/MaterializeCss/materialize/js/';
$_css='../../lib/css/';


	echo '<head>
		<link rel="stylesheet" media="screen" href="'.$_materialcss.'materialize.min.css">
		<link rel="stylesheet" media="screen" href="'.$_css.'style.css">
		<script src="'.$_js.'"></script>
		<script src="'.$_materialjs.'materialize.min.js"></script>
		<meta charset="utf-8">
		<script src="jquery.min.js"></script>
	</head>';
?>