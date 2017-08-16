<?php
	echo HEAD;
	include('funcione.php');

	/*
		este formulario no me funciona y el codigo esta identico a otros formularios que si me funcionan. Veamos que pasa
		cuando lo arregle lo escribo aqui..
		o.O no hice nada.. jaja que loco de pana..
		Hoy entrando, lo probe y si guarda...
		lo ultimo que hice la ultima vez que entre aqui fue borrar de la consulta hasta el tercer campo, y luego ponerlas de nuevo.. o.O
	*/
	
?>

<script>
var provincias_1=new Array("-","turmero","la victoria","Barcelona","Cagua","Villa de cura")
var provincias_2=new Array("-","Achaguas","Bruzual","Biruaca","Elorza","San fernando")
var provincias_3=new Array("-","Puerto ayacucho","San fernando de atabapo","San carlos de rio negro","Guainia")
var provincias_4=new Array("-","Barcelona","Puerto la cruz","Lecherias","Guanta","El tigre ","Anaco") 
var provincias_5=new Array("-","Barinas","Barinitas","Socopó","Santa Barbara","Sabaneta")
var provincias_6=new Array("-","Ciudad Bolivar","Ciudad Guayana","Upata","Caicara del Orinoco","Tumeremo")
var provincias_7=new Array("-","Valencia","Puerto Cabello","Guacara","Mariara","Guigue","Bejuma")
var provincias_8=new Array("-","San carlos","Tinaquillo","Tinaco","El Pao","El baúl")
var provincias_9=new Array("-","Tucupita","Curiapo","Pedernales","La Horqueta","Piacoa","Santa Catalina")

var provincias_10=new Array("-","Municipio Chacao","Municipio Libertador","Municipio Sucre","Municipio Baruta","Municipio el Hatillo")
var provincias_11=new Array("-","Coro","Santa Ana","Punto Fijo","Punta Cardón","Churuguara","Mirimire","Chichiriviche")
var provincias_12=new Array("-","San juan de los morros","Valle de la Pascua","Calabozo","Camaguan","Chaguaramas","Las mercedes","tucupido","Espino","sana María de ipire","Zaraza","Altagracia de Orituco")
var provincias_13=new Array("-","Barquisimeto","Carora","Cabudare","El Tocuyo","Quibor","Duaca","Cubiro")
var provincias_14=new Array("-","Mérida","El vigia","Ejido","Tovar")
var provincias_15=new Array("-","Los teques","Baruta","Caucagua","Cúa","San Casimiro","Charallave","Guarenas","Guatire","Higuerote","Ocumare del Tuy","Petare","Rio chico","Santa Teresa","Santa Lucía","San Francisco de Yare")
var provincias_16=new Array("-","Maturín","Caripito","Punta Mata","Morichal")
var provincias_17=new Array("-","Porlamar","La Asuncion","Villa Rosa","San Juan Bautista","Juan Griego","Pampatar","El Valle del Espiritu Santo","Punta de Piedas")
var provincias_18=new Array("-","Guanare","Acarigua","Agua Blanca","Araure","Biscucuy","Boconoíto","Guanarito","Píritu","Villa Bruzual")
var provincias_19=new Array("-","Cumaná","Carúpano","Güiria","Cumanacoa","Cariaco","Rio Caribe")
var provincias_20=new Array("-","San Cristóbal","Táriba","Rubio","La Fría","La grita","San Antonio del Táchira","Michelena","Capacho","Queniquea")
var provincias_21=new Array("-","Trujillo","Valera","Boconó","Escuque","Betijoque","Monay","Pampán")
var provincias_22=new Array("-","La Guaira","Catia la mar","Carayaca","Maiquetía","Caraballeda","Macuto","Naiguatá","Caruao")
var provincias_23=new Array("-","San Felipe","Yaritagua","Chivacoa","Nirgua","Cocorote","Albarico","Urachire")
var provincias_24=new Array("-","Maracaibo","Cabimas","Ciudad Ojeda","Lagunillas","Machiques de perijá","Mara") 
//tengo que cambiar las ciudades apartir del array 5...
function cambia_provincia(){
    var pais
    pais = document.f1.pais3[document.f1.pais3.selectedIndex].value
    if (pais != 0) {
    mis_provincias=eval("provincias_" + pais)
       num_provincias = mis_provincias.length
       document.f1.provincia3.length = num_provincias
       for(i=0;i<num_provincias;i++){
          document.f1.provincia3.options[i].value=mis_provincias[i]
          document.f1.provincia3.options[i].text=mis_provincias[i]
       }
    }else{
       document.f1.provincia3.length = 1
       document.f1.provincia3.options[0].value = "-"
       document.f1.provincia3.options[0].text = "-"
    }
    document.f1.provincia3.options[0].selected = true
} 

</script>


<form name="f1" action="app/model/registromodelos.php" method="post" enctype="multipart/form-data">

	<h2>Registro de Modelos</h2>


<div id="prueba2">

<h3>Datos personales</h3>
	<span id="red">*</span><span class="etiquetas">Cedula</span>
	

	<?
		ci('cedula','cedula');
	?>
<span class="etiquetas">Nombre y apellido</span>
	

	<?
		text('nombres','nombre',null);
	?>
	
<span class="etiquetas">Edad</span>
</br>
<?php
	edad('edad','edad');
?>
</br>
</br>
 <span class="etiquetas">Direccion</span>
  

<?adress('pais3','estado3','provincia3','ciudad3')?>

	
	</br>

<span id="red">*</span><span class="etiquetas">Email</span>
	

<?
email('email','email',null);
?>

	<?
		tlf('telefono','telefono','codi','codi');
	?>


	</div>

	<div style="width:800px;margin-left:90px;">

	<h3>Catecteristicas físicas</h3>

<div class="row">
	<div class="col s4">
		<div class="col s2">
			<span class="etiquetas">Estatura</span></br>
			Mts.</br><? contar('metro','metro')?>
		</div>
		<div class="col s2 offset-s1">
		</br>

		Cms.</br><select class="browser-default " name="altura" style="width:50px;">

					<?php
							for($i=1;$i<100;$i++){
									?>
										<option><?php echo $i?></option>
									<?
							}
					?>
				</select>

		</div>
		
		
	</div>

	<div class="col s4">
		<span class="etiquetas">Color de piel</span>
</br>
		<select class="browser-default" name="color">
			<option>Morena</option>
			<option>Piel blanca</option>
			<option>Negra</option>
		</select>
	</div>

	<div class="col s4">
		<span class="etiquetas">Tipo de pelo</span></br>
			<select class="browser-default" name="tipo_pelo">
				<option>Liso</option>
				<option>Liso ondulado</option>
				<option>Crespo</option>
		</select>

			
	</div>
</div>

<div class="row">
	<div class="col s4">

		<span class="etiquetas">Medidas</span>

			<div class="row">
					<div class="col s3">
							


							<input type="text" name="busto" style="width:50px;margin-left:30px;">
					</div>
					<div class="col s3">
							

							<input type="text" name="cintura" style="width:50px;margin-left:30px;">
					</div>
					<div class="col s3">
							

							<input type="text" name="cadera" style="width:50px;margin-left:30px;">
					</div>
			</div>
		</div>
<div class="col s4">
		<span class="etiquetas">Color de pelo</span>

</br>
			<select class="browser-default" name="color_pelo">
				<option>Rojo</option>
				<option>Castaño claro</option>
				<option>Castaño Oscuro</option>
				<option>Borgoña</option>
				<option>Marron</option>
				<option>Miel</option>
				<option>Negro</option>
			</select>
	</div>
<div class="col s4">

		<span class="etiquetas">Foto</span>

		<input type="file" name="foto" onchange="this.style.display='none';document.getElementById('msj').style.display=''">

		<div id="msj" style="display:none;">
				<p class="etiquetas" >	La imagen ha sido cargada</p>

		</div>


</div>
</div>



	


</br>
</br>
	
<p>Los campos con <span id="red">(*)</span> son requeridos</p>



</div>

<input type="button" class="btn btn-large" value="Limpiar" id="limpiarm">
<input type="button" class="btn btn-large" value="Buscar" id="buscarm">
<input type="submit" class="btn btn-large" value="Guardar" id="guardarm" name="guardarm">

</form>
<?
	/*
		no se guardaban las modelos. El codigo de insercion staba bien.
		hice como en el otro archivo y borre un poco de campos y no funciono.
		el boton aqui n el form no tenia name, se lo puse y no funciono.
		era la validacion en el php. no se que problema hay pero el peo fue con el isset($_POST['guardarm'])
	*/
?>


<?
		/*mostrar foto de modelo. Pero pendiente de la ruta... */
$user="root";$pass="";$host="localhost";$db="l_g_fotografia2";$adminemail="";
	$con=mysql_connect($host,$user,$pass) or z();mysql_select_db($db,$con)or z();
		$rs=mysql_query("select * from modelos
		
		")or die(mysql_error());
		
		while($rw=mysql_fetch_array($rs)){$k++;?>
			<tr id="<?=($k%2==0?'claro':'oscuro');?>" >
				<td>
				<img src="<?=(!empty($rw['foto'])?$rw['foto']:'');?>" width="10" height="370"/></td>
				
				
			</tr>
		<?}
	?>