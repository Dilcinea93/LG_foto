<?php
include('../config.php');
$name=$_GET['name'];
$name2=$_GET['name2'];
?>
	<!DOCTYPE html>
	<html>
	<head>
	<meta charset="utf-8">
		<title></title>
		<style type="stylesheet">
body {
    font-family:sans-serif;}

p,h2{
	font-family:sans-serif;
}
#parrafo{
			height:200px;
			padding:60px;
			font-family:sans-serif;
			font-size:20px;
			text-align:justify;
		}
#footer{
			margin-top: 300px;
			margin-left:20px;
		}
		#franja{
			height:10px;
			background:#aaeeff;
		}

		#prueba{
			margin-left:450px;width:360px;
			margin-top:30px;
		}
		</style>
	</head>
	<body>
	<table>
			<img src="<?=$name?>" height="900"/>
		</table>
		&nbsp;
		<div id="titulo" >
			<h3 align="center">Hola!</h3></br>
			<h2 align="center">Gracias	por	interesarte	en	nuestro	trabajo.</h2>
		</div>
<div id="parrafo">
	<p>Particularmente lo	que	más	me	gusta	de	las	bodas, es	plasmar	las	emociones	y	los	detalles	
implicítos	 en	 las	 diferentes etapas	 del	 evento,	 me gusta	 lograr	 en	 mis	 fotografías	 esa	
sensación	de	alegría	y	emoción	de	un	día	tan	único	y	especial.
Nos	gusta	ofrecer	a	nuestros	clientes	un	ambiente	de	trabajo	con	la	mejor	energía	posible,	
en	donde	se	cree	una	atmosfera	agradable	que	permita	una	dinámica	fluida	y	natural, que	
aporten	las	mejores	expresiones	honestas	a	las	tomas	a	realizar.	</p>
</div>
<div id="prueba">
	Un	buen	trabajo,	y una	gran	experiencia.
</div>
<img src="files/img.png" style="margin-top:200px;">

		<div id="titulo">

				<h3 align="center">Servicio	de	Fotografía	para	Boda	Civil</h3>

				<div id="franja"></div>
		</div>

		<div id="parrafo">
			<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar .</p>
		</div>
<br><br><br>
<div style="margin-top:340px">
				<h3 align="center">¿Cómo	trabajamos?</h3>
			
</div>

	Para	formalizar	el	servicio	una	vez	aprobada	la	propuesta	económica,	procedemos	de	la	siguiente	
forma:

<ol>
	<li>Definición del	concepto Fotográfico:  Aquí	se	plantean	detalles	importantes	 tales	como: Estilo	de	las	 fotografías,	dinámica	del	evento,	
entre	otras	cosas	que	ayudan	a	saber	el	material	que	se	va	a	utilizar	el	día	de	toma	y	contribuir	a	la	
comodidad	de	la	logística,	así	como	también	brindar	recomendaciones	y	previsiones.
Nota: El	 proceso de	 definición	 del	 concepto	 puede	 realizarse	 vía	 telefónica,	 por	 medio	 de	
mensajería	instantánea	o	personalmente.	(previo	acuerdo	ambas	partes)</li>
	<li>Reserva	de	Fecha: Una	vez	fijada	la	fecha	con	el	fotógrafo,	el	cliente	transfiere	el	50%	del	monto	total	del	paquete	
seleccionado.</li>
<li>Día	de	Toma:  Para	el	 día	 de	 las	 tomas	es	 importante	 la	 comunicación	 y	el	 trabajo	en	equipo,	el	 personal	 que	
trabajará	en	su	evento	no	conoce	sus	familiares	y	seres	queridos, razón	por	la	cual	segerimos	estar	
en	 constante	 comunicación	 y	 notificar	 los	momentos	 que	 consideren	 de	 importancia	 para	 estar	
atentos	y	no	perdernos	ni	un	solo	detalle	relevante. (Se	recomienda	conversar	un	día	antes	a	 fin	
de	revisar	nuevamente	las	recomendacones	y	puntos	importantes.)	
Al	finalizar	el	evento el	cliente	debe	transferir	el	50%	restantedel	monto total	del	paquete	
seleccionado.</li><!--Si quito el li 111 si se genera el PDF? what....??-->
<li>Tiempo	de	entrega:  El	tiempo de	entrega	del	material	fotográfico	varía	entre	15	días	hábiles	y	30	días	dependiendo	de	
la	complejidad	y	detalles	a	manejar	en	la	post-producción.	Las	Fotografías se	entregan en	formato	
JPEG	de	Máxima calidad	y	el	Video	se	entrega	en	Fotmato	digital	de calidad	HD	1080p Vía	Dopbox	
o	Google	Drive. (se	recomienda	descargar	todo	el	material	en	un	lapso	de	7	días	ya	que	el	mismo	
se	borra	del	servidor	8	días	luego	de	realizada	la	entrega).</li>
</ol><div id="footer">
	Datos	Bancarios
Cta. Corriente	Banco	Mercantil	Nº	0105-0012	50	1012520188 a	nombre	de	Luis	Daniel	González
C.I.	15.911.216 – Correo:	luisdaniel.gm@gmail.com
</div>
				
<img src="<?=$name2?>" height="900"/>
	</body>
	</html>

<?
include('dom.php');
?>
<script type="text/javascript">
	location.href="envio.php";
</script>