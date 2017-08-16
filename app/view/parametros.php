<html>
<head>
	<title>Parametros</title>
	<script type="text/javascript" src="jquery.min.js"></script>
</head>
<body>
	<a href="#" id="boton1">Boton1</a>
	<a href="#" id="boton2">Boton2</a>

	<script type="text/javascript">
		$(document).ready(function(){
			$("a").click(function(event){
				$(this).css("display","none");
			});
		});
	</script>



</body>
</html>