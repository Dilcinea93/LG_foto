<?php
	echo HEAD;
	include('funcione.php');
	
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
var provincias_15=new Array("-","Los teques","Baruta","Caucagua","Cúa","San Casimiro","Charallave","Garenas","Guatire","Higuerote","Ocumare del Tuy","Petare","Rio chico","Santa Teresa","Santa Lucía","San Francisco de Yare")
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
    pais = document.f1.pais2[document.f1.pais2.selectedIndex].value
    if (pais != 0) {
    mis_provincias=eval("provincias_" + pais)
       num_provincias = mis_provincias.length
       document.f1.provincia2.length = num_provincias
       for(i=0;i<num_provincias;i++){
          document.f1.provincia2.options[i].value=mis_provincias[i]
          document.f1.provincia2.options[i].text=mis_provincias[i]
       }
    }else{
       document.f1.provincia2.length = 1
       document.f1.provincia2.options[0].value = "-"
       document.f1.provincia2.options[0].text = "-"
    }
    document.f1.provincia2.options[0].selected = true
} 
</script>


<form id="formulario2" name="f1">

	<h2>Registro de Clientes</h2>


<div id="prueba2">

	<span id="red">*</span><span class="etiquetas">Cedula</span>
	

	<?
		ci('cedula','cedula');
	?>
<span class="etiquetas">Nombre y apellido</span>
	

	<?
		text('nombre','nombre',null);
	?>
	<span id="red">*</span><span class="etiquetas">Raz&oacute;n social</span>
		<?
		rif('razon','razon');
	?>

	<span id="red">*</span> <span class="etiquetas">Direccion</span>
  

<?adress('pais2','estado2','provincia2','ciudad2')?>

	
	</br>
<span id="red">*</span><span class="etiquetas">RIF</span>
	
	<?
		rif2('rif');
	?>
	<span id="red">*</span><span class="etiquetas">Email</span>
	

<?

email('email','email',null);
?>

	<?
		tlf('telefono','telefono','codi','codi');
	?>


	
</br>
</br>
	
<p>Los campos con <span id="red">(*)</span> son requeridos</p>



	</div>
<input type="button" class="btn btn-large" value="Limpiar" id="limpiarc">
<input type="button" class="btn btn-large" value="Buscar" id="buscarc">
<input type="button" class="btn btn-large" value="Guardar" id="guardarc">


</form>
<script type="text/javascript">

</script>