
<?php



//LINEA 190: Porque no me esta consultando a la tabla de notas???
//
function calcula_numero_dia_semana($dia,$mes,$ano){
	$numerodiasemana = date('w', mktime(0,0,0,$mes,$dia,$ano)); //esto devuelve 1, colo con la w.. con la funcion esa devuelve 2
	if ($numerodiasemana == 0) 
		$numerodiasemana = 6;
	else
		$numerodiasemana--;
	return $numerodiasemana;
}

//funcion que devuelve el último día de un mes y año dados
function ultimoDia($mes,$ano){ 
    $ultimo_dia=28; 
    while (checkdate($mes,$ultimo_dia + 1,$ano)){ 
       $ultimo_dia++; 
    } 
    return $ultimo_dia; 
} 

function dame_nombre_mes($mes){
	 switch ($mes){
	 	case 1:
			$nombre_mes="Enero";
			break;
	 	case 2:
			$nombre_mes="Febrero";
			break;
	 	case 3:
			$nombre_mes="Marzo";
			break;
	 	case 4:
			$nombre_mes="Abril";
			break;
	 	case 5:
			$nombre_mes="Mayo";
			break;
	 	case 6:
			$nombre_mes="Junio";
			break;
	 	case 7:
			$nombre_mes="Julio";
			break;
	 	case 8:
			$nombre_mes="Agosto";
			break;
	 	case 9:
			$nombre_mes="Septiembre";
			break;
	 	case 10:
			$nombre_mes="Octubre";
			break;
	 	case 11:
			$nombre_mes="Noviembre";
			break;
	 	case 12:
			$nombre_mes="Diciembre";
			break;
	}
	return $nombre_mes;
}

function dame_estilo($dia_imprimir){

	//determina la cantidad de dias que tiene el mes...

	global $mes,$ano,$dia_solo_hoy,$tiempo_actual; //declaracion de varables globales.
	//dependiendo si el día es Hoy, Domigo o Cualquier otro, devuelvo un estilo
	if ($dia_solo_hoy == $dia_imprimir && $mes==date("n", $tiempo_actual) && $ano==date("Y", $tiempo_actual)){
		//si es hoy
		$estilo = " class='hoy'";
	}else{
		$fecha=mktime(12,0,0,$mes,$dia_imprimir,$ano);
		if (date("w",$fecha)==0){
			//si es domingo 
			$estilo = " class='dmingo'";
		}else{
			//si es cualquier dia
			$estilo = " class='diario'";
		}
	}
	return $estilo;
}
							//8, 2016
function mostrar_calendario($mes,$ano){
	global $parametros_formulario;
	//tomo el nombre del mes que hay que imprimir
	$nombre_mes = dame_nombre_mes($mes);
	

	?>
		<a href="falta.php">LO QUE FAlTA</a>
	<?

echo "MES:";
	echo $mes;
	echo "AÑO:";
	echo $ano;

	//construyo la tabla general
	echo '<table class="tablacalendario" cellspacing="3" cellpadding="2" border="0">';
	echo '<tr><td colspan="7" class="tit">';
	//tabla para mostrar el mes el año y los controles para pasar al mes anterior y siguiente
	echo '<table id="title" width="100%" cellspacing="2" cellpadding="2" border="0"><tr><td class="messiguiente">';
	//calculo el mes y ano del mes anterior
	$mes_anterior = $mes - 1;
	$ano_anterior = $ano;
	if ($mes_anterior==0){
		$ano_anterior--;
		$mes_anterior=12;
	}
	echo "<a href='index.php?$parametros_formulario&nuevo_mes=$mes_anterior&nuevo_ano=$ano_anterior'><span class='glyphicon glyphicon-chevron-left'></span></a></td>";
	echo "<td class='titmesano'>$nombre_mes $ano</td>";
	echo "<td class='mesanterior'>";
	//calculo el mes y ano del mes siguiente
	$mes_siguiente = $mes + 1;
	$ano_siguiente = $ano;
	if ($mes_siguiente==13){
		$ano_siguiente++;
		$mes_siguiente=1;
	}

	$dia_actual = 1;
	
	//calculo el numero del dia de la semana del primer dia
	$numero_dia = calcula_numero_dia_semana(1,$mes,$ano);
	echo "<a href='index.php?$parametros_formulario&nuevo_mes=$mes_siguiente&nuevo_ano=$ano_siguiente'><span class='glyphicon glyphicon-chevron-right'></span></a></td></tr></table></td></tr>";
	echo '	<tr>
			    <td width=14% class="diasemana">L</td>
			    <td width=14% class="diasemana">M</td>
			    <td width=14% class="diasemana">M</td>
			    <td width=14% class="diasemana">J</td>
			    <td width=14% class="diasemana">V</td>
			    <td width=14% class="diasemana">S</td>
			    <td width=14% class="diasemana">D</td>
			</tr>';
	
	//Variable para llevar la cuenta del dia actual
	//echo "Numero del dia de demana del primer: $numero_dia <br>";
	
	//calculo el último dia del mes
	$ultimo_dia = ultimoDia($mes,$ano);
	

	//escribo la primera fila de la semana
	echo "<tr>";
	for ($i=0;$i<7;$i++){ //primera fila... primera semana del mes.. por eso el contador es 7


				include('conexion.php');
				$query=$conexion->query("select * from notas where fecha='$dia_actual'");
				while($rw=$query->fetch_array()){
					$fecha=$rw['fecha'];
					$evento=$rw['evento'];


				}
				if ($i < $numero_dia){
				//si el dia de la semana i es menor que el numero del primer dia de la semana no pongo 	nada en la celda
				echo '<td class="diainvalido" ><span></span></td>';

				} else {



					echo "<td class='diavalido' id='bien'><span class='dias'>
					".$dia_actual."
					<a href='agregar.php?id=".$dia_actual."&mes=".$mes."&ano=".$ano."'></span>						
					<span class='glyphicon glyphicon-plus'></span>					
					</a>";

					$mesactual=$_GET['nuevo_mes'];

						if($fecha==$dia_actual&&$mesactual=='8'){

					echo '<a href="listado.php?id='.$dia_actual.'">'
							?>
							<span class="glyphicon glyphicon-calendar"></span>
							<?
						'</a>';
						}							
					echo"</td>";

			$dia_actual++;
		}
	}//fin del for
	echo "</tr>";
	
	//recorro todos los demás días hasta el final del mes				

	$numero_dia = 0;
	while ($dia_actual <= $ultimo_dia){



				include('conexion.php');
				$query=$conexion->query("select * from notas where fecha='$dia_actual' and mes='$mes'");
				while($rw=$query->fetch_array()){
					$fecha=$rw['fecha'];
					$evento=$rw['evento'];
					$mess=$rw['mes'];
					$anio=$rw['ano'];
				}
				//si estamos a principio de la semana escribo el <TR>
				if ($numero_dia == 0)
				echo "<tr>";

			//agregar.php?id=".$dia_actual."&mes=".$mes."&ano=".$ano."

				echo "<td class='diavalido'><span class='dias'>
				".$dia_actual."</span>
				<a href='' onclick='funcion()'>
				<span class='glyphicon glyphicon-plus'></span>
				</a>";
///aqui va un calendar

					$mesactual=$_GET['nuevo_mes'];
					if($fecha==$dia_actual&&$mess==$mesactual&&$anio==$ano){


				echo "<a href='listado.php?id=".$dia_actual."&mes=".$mes."&ano=".$ano."'>"
					
							?>
							<span class="glyphicon glyphicon-calendar"></span>
							<?
						'</a>';
						}
///
		echo "</td>";
		$dia_actual++;
		$numero_dia++;
		//si es el uñtimo de la semana, me pongo al principio de la semana y escribo el </tr>
		if ($numero_dia == 7){
			$numero_dia = 0;
			echo "</tr>";
		}
	}
	
	//compruebo que celdas me faltan por escribir vacias de la última semana del mes
	for ($i=$numero_dia;$i<7;$i++){
		echo '<td class="diainvalido"><span></span></td>';
	}
	
	echo "</tr>";
	echo "</table>";
}	

function formularioCalendario($mes,$ano){
	global $parametros_formulario;
echo '
	<br>
	<table id="sub" align="center" cellspacing="2" cellpadding="2" border="0" class="xform">
	<tr><form action="index.php?' . $parametros_formulario . '" method="POST">';
echo '
    <td align="center" valign="top">
		Mes: <br>
		<select name=nuevo_mes>
		<option value="1"';
if ($mes==1)
 echo "selected";
echo'>Enero
		<option value="2" ';
if ($mes==2) 
	echo "selected";
echo'>Febrero
		<option value="3" ';
if ($mes==3) 
	echo "selected";
echo'>Marzo
		<option value="4" ';
if ($mes==4) 
	echo "selected";
echo '>Abril
		<option value="5" ';
if ($mes==5) 
		echo "selected";
echo '>Mayo
		<option value="6" ';
if ($mes==6) 
	echo "selected";
echo '>Junio
		<option value="7" ';
if ($mes==7) 
	echo "selected";
echo '>Julio
		<option value="8" ';
if ($mes==8) 
	echo "selected";
echo '>Agosto
		<option value="9" ';
if ($mes==9) 
	echo "selected";
echo '>Septiembre
		<option value="10" ';
if ($mes==10) 
	echo "selected";
echo '>Octubre
		<option value="11" ';
if ($mes==11) 
	echo "selected";
echo '>Noviembre
		<option value="12" ';
if ($mes==12) 
    echo "selected";
echo '>Diciembre
		</select>
		</td>';
echo '		
	    <td align="center" valign="top">
		A&ntilde;o: <br>
		<select name=nuevo_ano>';

for ($cont=1900;$cont<$ano+3;$cont++){
	echo "<option value='$cont'";
	if ($ano==$cont) 
   		echo " selected";
   	echo ">$cont";
}
echo '
	</select>
		</td>';
echo '
	</tr>
	<tr>
	    <td colspan="2" align="center"><input type="Submit" class="btn btn-large btn-info"value=" IR "></td>
	</tr>
	</table><br>
	
	<br>
	
	</form>';

}
	
////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Función que escribe en la página un fomrulario preparado para introducir una fecha y enlazado con el calendario para seleccionarla comodamente
////////////////////////////////////////////////////////////////////////////////////////////////////////////

?>




<script type="text/javascript">
	function funcion(){
var ventanaCalendario=false;
		if (typeof ventanaCalendario.document == "object") {
		ventanaCalendario.close()
	}
		ventanaCalendario = window.open("calendario/index.php","calendario","width=300,height=300,left=100,top=100,scrollbars=no,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")

	}
</script>