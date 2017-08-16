<?php
echo HEAD;
include('funcione.php');
?>
<center>
	
<h1>	Consulta de modelos</h1>
</center>

<div CLASS="row">

<hr/>
	<div class="col s8">	
			<h3>	Consultar por nombre</h3>
			</br>

			 <form accept-charset="utf-8" method="POST">
                                <center><h1><i class="fa fa-search" aria-hidden="true"></i> <input type="text" name="busqueda" id="busqueda" maxlength="30" autocomplete="off" onKeyUp="buscar();" style=" font-size: 1em;"></h1></center>
            </form>
 			
 			<div id="resultadoBusqueda"></div>
        
            <script type="	text/javascript">
            		$(document).ready(function() {
                                    $("#resultadoBusqueda").html('<center><p>Sin instrucciones de busqueda</p></center>');
                                });

                                function buscar() {
                                    var textoBusqueda = $("#busqueda").val();
 
                                    if (textoBusqueda != "") {
                                        $.post("app/model/buscarpersona.php", 
                                            {valorBusqueda: textoBusqueda}, 
                                            function(mensaje) {
                                            $("#resultadoBusqueda").html(mensaje);
                                        }); 
                                    } else { 
                                         $("#resultadoBusqueda").html('<center><p>Sin instrucciones de busqueda</p></center>');
                              };
                     };
            </script>
	</div>
</div>

<hr/>
<div CLASS="row">
	<div class="col s8">	
			<h3>	Consultar por ciudad</h3>

<form id="formubic">

<span class="etiquetas">Que estado de Venezuela deseas consultar?</span>
</br>
<?adresconsulta('estadosmodel','estadosmodel')?>

<div id="resultados">
  
</div>
</form>

	</div>
</div>


<hr/>


<div CLASS="row">
	<div class="col s8">	
			<h3>	Consultar por Color de pelo</h3>

<span class="etiquetas">Cual color de pelo?</span>

</br>
			<select class="browser-default" name="color_pelo"  onchange="consultamodelos(this.value)">
				<option value="1">Rojo</option>
				<option value="1">Castaño claro</option>
				<option value="1">Castaño Oscuro</option>
				<option value="1">Borgoña</option>
				<option value="1">Marron</option>
				<option value="1">Miel</option>
				<option value="1">Negro</option>
			</select>

	</div>
</div>


 			<div id="resultadoBusqueda2"></div>
<hr/>


<div CLASS="row">
	<div class="col s8">	
			<h3>	Consultar por Color de piel</h3>
<select class="browser-default" name="color"  onchange="consultamodelos(this.value)">
			<option value="2">Morena</option>
			<option value="2">Piel blanca</option>
			<option value="2">Negra</option>
		</select>


	</div>
</div>


 			<div id="resultadoBusqueda3"></div>
<hr/>


<div CLASS="row">
	<div class="col s8">	
			<h3>	Consultar por edad</h3>

			
			<div class="col s2">
				<input type="text" name="edad">
			</div>
	</div>
</div>


 			<div id="resultadoBusqueda4"></div>
<hr/>


<div CLASS="row">
	<div class="col s8">	
			<h3>	Consultar por Tipo de pelo</h3>

			<select class="browser-default" name="tipo_pelo" >
				<option>Liso</option>
				<option>Liso ondulado</option>
				<option>Crespo</option>
		</select>
	</div>
</div>


 			<div id="resultadoBusqueda5"></div>
<script type="text/javascript">


</script>

