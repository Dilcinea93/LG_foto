<?session_start();

?>
		
<html>
<head>
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
<title>Sistema de facturacion- Luis Gonzales Fotografía</title>

<?
	function encriptar($string){
		$string= utf8_encode($string);
		$control="qwerty";
		$string= base64_encode($string);
		return($string);
	}
?>
</head>
<body>
	<div id="menu">
			<div class="menu">
<ul>
	<li>
				<div id="title_dl">
					<div id="logo">
						<a href="index2.php"><img id="icon" src="<?=$_i?>logof.jpg">
					</div>
				</div>
	</li>
		
	<li>
		<div id="title_ds" class="image" style="margin-top:140px;">
			<div id="logo" >

				<span class="glyphicon glyphicon-user"></span>
			</div>
			<?
				/*$id=encriptar('proveedores');*/
			?>
			<p>

				<?
					echo "<a href='?id=proveedores'>Proveedores</a>";
				?>
					<ul>
					<li>
				<a><span class="glyphicon glyphicon-pencil"></span></a> <a href="?id=consultapro">&nbsp;&nbsp;&nbsp;&nbsp;Consultar proveedores</a></li>
				</ul>
			</p>
		</div>
	</li>


	<li>
			<div id="title_df">
			<div id="logo">
			
				<a><span class="glyphicon glyphicon-shopping-cart"></span></a></div>
			<p><a href="?id=clientes">Clientes
				<ul>
					<li>
				<a><span class="glyphicon glyphicon-pencil"></span></a> <a href="?id=consulta_cliente">&nbsp;&nbsp;&nbsp;&nbsp;Consultar clientes</a></li>
				</ul>
			</a></p>
		</div>
	</li>

	<li>
			<div id="title_df">
			<div id="logo">
			
				<a><span class="glyphicon glyphicon-picture"></span></a></div>
			<p><a href="?id=models">Modelos
				<ul>
					<li>
				<a><span class="glyphicon glyphicon-camera"></span></a> <a href="?id=consulta_modelos">&nbsp;&nbsp;&nbsp;&nbsp;Consultar modelos</a></li>
				</ul>
			</a></p>
		</div>
	</li>
	
	<li>

		<div id="title_df">
			<div id="logo">
				<a><span class="glyphicon glyphicon-euro"></span></a></div>
			<p><a href="#">Precios
				<ul>
					<li>
				<a><span class="glyphicon glyphicon-pencil"></span></a> <a href="?id=registro_prices">&nbsp;&nbsp;&nbsp;&nbsp;Registrar precios</a></li>
				</ul>
			</a></p>
		</div>
	</li>
	<li>

		<div id="title_de">
			<div id="logo">
				<a><span class="glyphicon glyphicon-edit"></span></a></div>
			<p><a href="#">Presupuestos
				<ul>
				<li>
				<a><span class="glyphicon glyphicon-tag"></span></a><a href="?id=g_presupuestos">&nbsp;&nbsp;&nbsp;&nbsp;Generar presupuestos</a></li>
				<li>
				<a><span class="glyphicon glyphicon-list-alt"></span></a><a href="?id=registro_presup">&nbsp;&nbsp;&nbsp;&nbsp;Facturar presupuestos</a></li>
				<li>
				<a><span class="glyphicon glyphicon-search"></span></a><a href="?id=facturados">&nbsp;&nbsp;&nbsp;&nbsp;Consultar presupuestos</a></li>
				</ul>
			</a></p>
		</div>
	</li>
	

	<li>
		<div id="title_ds">
			<div id="logo">
				<a><span class="glyphicon glyphicon-calendar"></span></a></div>
			<p><a href="?id=evento">Eventos</a></p>
		</div>

	</li>


	<li>
		<div id="title_ds">
			<div id="logo">
				<a><span class="glyphicon glyphicon-user"></span></a></div>
			<p><a href="?id=user">Usuarios</a></p>
		</div>

	</li>

	<li>
		<div id="title_ds">
			<div id="logo">
				<a><span class="glyphicon glyphicon-log-out"></span></a></div>
			<p><a href="?id=logout&c=controller">Salir</a></p>
		</div>
	</li>

</ul>
	</div>

</div>


<div class="row">
	<div class="col s10 offset-s1">
<div id="result" style="height:auto;width:auto;">
	<?	
	if(empty($_GET['id'])){
		include_once('entrada.php');
	}else{
		$modulo=$_GET['id'];
		if(isset($_GET['c'])){
			$c=$_GET['c'];
			if($c=='controller'){
				include('app/controller/'.$modulo.'.php');
				}				
			}
			include('app/view/'.$modulo.'.php');		
		}
	?>
</div>

	</div>
</div>

</body>
</html>

<? 
	echo HEAD;
?>