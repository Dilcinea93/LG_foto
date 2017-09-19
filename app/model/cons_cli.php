<?
include('funcione.php');
?>
       <script type=" text/javascript">
                $(document).ready(function() {
                                    $("#resultadoBusqueda").html('<center><p>Sin instrucciones de busqueda</p></center>');
                                    
                                });

                                function buscar() {
                                    var textoBusqueda = $("#busqueda").val();
 
                                    if (textoBusqueda != "") {
                                        $.post("app/model/consultas.php", 
                                            {valorBusqueda: textoBusqueda}, 
                                            function(mensaje) {
                                            $("#resultadoBusqueda").html(mensaje);
                                        }); 
                                    } else { 
                                         $("#resultadoBusqueda").html('<center><p>Sin instrucciones de busqueda</p></center>');
                              };
                     };

                     function funcion(){
                      /*no entiendo porque este codigo se ejecuta pero la segunda vez que se llama... la primera vez entra a la funcion, pero no hace la llamada ajax.
                      */
                      $("#consultacliente").change(function(event){
                          var formubic= $("#formubic").serialize();
                          $.ajax({
                            url: 'app/model/ubicacion3.php',
                            type:'post',
                            data: formubic
                          }).done(function(formubic){
                            $("#resultados3").html(formubic);
                          });
                        });
                    };
var provincias_1=new Array("-","turmero","la victoria","Barcelona","Cagua","Villa de cura")
var provincias_2=new Array("-","Achaguas","Bruzual","Biruaca","Elorza","San fernando")
var provincias_3=new Array("-","Puerto ayacucho","San fernando de atabapo","San carlos de rio negro","Guainia")
var provincias_4=new Array("-","Barcelona","Puerto la cruz","Lecherias","Guanta","El tigre ","Anaco") 
var provincias_5=new Array("-","Barinas","Barinitas","Socopó","Santa Barbara","Sabaneta")
var provincias_6=new Array("-","Ciudad Bolivar","Ciudad Guayana","Upata","Caicara del Orinoco","Tumeremo")
var provincias_7=new Array("-","Valencia","Puerto Cabello","Guacara","Mariara","Guigue","Bejuma")
var provincias_8=new Array("-","San carlos","Tinaquillo","Tinaco","El Pao","El baúl")
var provincias_9=new Array("-","Tucupita","Curiapo","Pedernales","La Horqueta","Piacoa","Santa Catalina")
var provincias_10=new Array("-","Caracas","Barinitas","Socopó","Santa Barbara","Sabaneta")
var provincias_11=new Array("-","Coro","Santa Ana","Punto Fijo","Punta Cardón","Churuguara","Mirimire","Chichiriviche")
var provincias_12=new Array("-","San juan de los morros","Valle de la Pascua","Calabozo","Camaguan","Chaguaramas","Las mercedes","tucupido","Espino","sana María de ipire","Zaraza","Altagracia de Orituco")
var provincias_13=new Array("-","Barquisimeto","Carora","Cabudare","El Tocuyo","Quibor","Duaca","Cubiro")
var provincias_15=new Array("-","Mérida","El vigia","Ejido","Tovar")
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
    pais = document.f1.pais[document.f1.pais.selectedIndex].value
    if (pais != 0) {
    mis_provincias=eval("provincias_" + pais)
       num_provincias = mis_provincias.length
       document.f1.provincia.length = num_provincias
       for(i=0;i<num_provincias;i++){
          document.f1.provincia.options[i].value=mis_provincias[i]
          document.f1.provincia.options[i].text=mis_provincias[i]
       }
    }else{
       document.f1.provincia.length = 1
       document.f1.provincia.options[0].value = "-"
       document.f1.provincia.options[0].text = "-"
    }
    document.f1.provincia.options[0].selected = true
} 
</script>

<h3>Consultar por nombre</h3>
<div  id="tabla">
  <form accept-charset="utf-8" method="POST" >
           <center>
               <h1>
                   <i class="fa fa-search" aria-hidden="true"></i> <input type="text" name="busqueda" id="busqueda" maxlength="30" autocomplete="off" onKeyUp="buscar();" style=" font-size: 1em;">
               </h1>
           </center>
          <div id="resultadoBusqueda">
          </div>
  </form>
</div>

<div id="dos">
  <h3>Consultar por zona</h3>
    <form  id="formubic" name="f1">
      <span class="etiquetas">Que estado de Venezuela deseas consultar?</span>
        </br>
              <select id="consultacliente" name="consultacliente" onchange="funcion()" class="browser-default">
              <option value="0" selected>Seleccione...</option>
              <option value="1">Aragua</option>
              <option value="2">Apure</option>
              <option value="3">Amazonas</option>
              <option value="4">Anzoategui</option>
              <option value="5">Barinas</option>
              <option value="6">Bolivar</option>
              <option value="7">Carabobo</option>
              <option value="8">Cojedes</option>
              <option value="9">Delta Amacuro</option>
              <option value="10">Distrito Capital</option>
              <option value="11">falcón</option>
              <option value="12">Guárico</option>
              <option value="13">Lara</option>
              <option value="14">Mérida</option>
              <option value="15">Miranda</option>
              <option value="16">Monagas</option>
              <option value="17">Nueva esparta</option>
              <option value="18">Portuguesa</option>
              <option value="19">Sucre</option>
              <option value="20">Táchira</option>
              <option value="21">Trujillo</option>
              <option value="22">Vargas</option>
              <option value="23">Yaracuy</option>
              <option value="24">Zulia</option>
              </select>
    </form>
    <div id="resultados3">
      
    </div>
</div>