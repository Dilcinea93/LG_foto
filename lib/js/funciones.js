	$(document).ready(function(){
$("#estados").change(function(event){
      var formubic= $("#formubic").serialize();
      $.ajax({
        url: 'app/model/ubicacion.php',
        type:'post',
        data: formubic
      }).done(function(formubic){
        $("#resultados").html(formubic);
      });
    });

$("#estadosmodel").change(function(event){
      var formubic= $("#formubic").serialize();
      $.ajax({
        url: 'app/model/consultamodelos.php',
        type:'post',
        data: formubic
      }).done(function(formubic){
        $("#resultados").html(formubic);
      });
    });

$("#guardado").click(function(event){
	var formuser= $("#usuario").serialize();
      $.ajax({
        url: 'app/model/usuarios.php',
        type:'post',
        data: formuser
      }).done(function(formuser){
      	alert('Los datos se han guardado correctamente.');
      });
    });



$("#estados3").change(function(event){
      var formubic= $("#formubic").serialize();
      $.ajax({
        url: 'app/model/ubicacion3.php',
        type:'post',
        data: formubic
      }).done(function(formubic){
        $("#resultados3").html(formubic);
      });
    });
/**/
/**/
$("#nombre_c").keyup(function(event){
	var formcliente= $("#formcliente").serialize();
	$.ajax({
		url:'app/model/consultas.php',
		type:'post',
		data: formcliente
	}).done(function(formcliente){
		$("#resultados2").html(formcliente);
	});
});
 $("#marca").change(function () {
           $("#marca option:selected").each(function () {
            elegido=$(this).val();
            $.post("app/view/modelos.php", { elegido: elegido }, function(data){
            $("#modelo").html(data);
            });            
        });
   })
		$("#guardar").click(function(event){
			event.preventDefault();

			$("#guardar").prop('disabled',true);
			var ci= document.getElementById("cedula").value;
			var nombre= document.getElementById("nombre").value;
			var razon= document.getElementById('razon').value;
			var servicio= document.getElementById("servicio").value;
			var telefono= document.getElementById("telefono").value;
			var precio= document.getElementById("precio").value;
			var estado= document.getElementById("estado").value;
			var ciudad= document.getElementById("ciudad").value;


			if(ci.length==''||telefono.length==''||precio.length==''){
				alert('Debes llenar todos los campos requeridos.');
				$("#guardar").removeAttr('disabled');

			}else{

				var exp= /^[A-Z]\-\d{8}\-[0-9]$/;
				var dato= document.getElementById("rif").value;

				if(!exp.test(dato)){
					alert('El formato del RIF debe ser X-00000000-X');
					$("#guardar").removeAttr('disabled');
				}
				else{
					if(nombre.length==' '||razon.length==' '||servicio.length==' '){
					alert('Llene los campos del formulario');
					$("#guardar").removeAttr('disabled');
				}
				else{
					if(nombre.indexOf(' ')==0||razon.indexOf(' ')==0||servicio.indexOf(' ')==0){
					alert('Los datos introducidos no deben comenzar con un espacio en blanco');
					$("#guardar").removeAttr('disabled');
				}
				else{
					var form= $("#formulario").serialize();
					$.ajax({
						type:"POST",
						url:"app/model/registro.php",
						data:form
					}).done(function(form){


							alert('Se han guardado los datos con exito');

							$("#nombre").val('');
							$("#cedula").val('');
							$("#precio").val('');
							$("#servicio").val('');
							$("#telefono").val('');
							$("#razon").val('');
							$("#rif").val('');
							$("#guardar").removeAttr('disabled');
						});
				} //cuarto else

/******************************/


	
			}//tercer else

		} //segundo else
	} //primer else
}); //function event

		$("#eliminar").click(function(event){
			event.preventDefault();
var form= $("#formulario").serialize();
			$.ajax({
	type:"POST",
	url:"app/model/borrar.php",
	data:form
}).done(function(info){
	alert('Se han eliminado los datos');
	$("#nombre").val('');
	$("#cedula").val('');
	$("#precio").val('');
	$("#servicio").val('');
	$("#rif").val('');
	$("#telefono").val('');
	$("#razon").val('');
});
		});


		$("#buscar").click(function(event){
			event.preventDefault();
var form= $("#formulario").serialize();
			$.ajax({
	type:"POST",
	url:"app/model/buscar.php",
	dataType:"json",
	data:form
}).done(function(form){
	$("#nombre").val(form.nombre);
	$("#razon").val(form.razon);
	$("#servicio").val(form.servicio);
	$("#precio").val(form.precio);
	$("#telefono").val(form.telefono);
	$("#rif").val(form.rif);	
	$("#codi").val(form.cod);

});



		});

		$("#limpiar").click(function(event){
			$("#nombre").val('');
	$("#cedula").val('');
	$("#cedulac").val('');
	$("#email").val('');
	$("#rif").val('');
	$("#fax").val('');
	$("#direccion").val('');
	$("#precio").val('');
	$("#servicio").val('');
	$("#telefono").val('');
	$("#razon").val('');

		});

/*************************************/



		$("#guardarc").click(function(event){
$("#guardarc").prop('disabled',true);

				var cedula= $("#cedula").val();
				var nombre= $("#nombre").val();
				var razon= $("#razon").val();
				var email=$("#email").val();
				var telefono=$("#telefono").val();
				var direccion=$("#direccion").val();

if(cedula.length==''||email.length==''||razon.length==''){
	alert('Debe llenar todos los campos requeridos');
	
	$("#guardarc").removeAttr('disabled');
}else{

	var exp= /^[J]\-\d{8}\-[0-9]$/;
	var dato= document.getElementById("rif").value;

	if(!exp.test(dato)){
		alert('El formato del RIF debe ser X-00000000-X');
			$("#guardarc").removeAttr('disabled');
	}else{

	if(nombre.indexOf(' ')==0||direccion.indexOf(' ')==0){
		alert('Los datos introducidos no deben comenzar con un espacio en blanco');

	$("#guardarc").removeAttr('disabled');
	}else{

d=0;
	p=0;
	var c=document.getElementById("email").value;
	
	for(i=1;i<c.length;i++){
		if(c.charAt(i-1)=="@"){
			d++;
			
		}
		if(d==1){
			if(c.charAt(i-1)=="."){
				p++;
			}
			
		}
		
		
		
	}
	
	if(d!=1&&p!=1){
	
	alert("El campo email debe tener un @ y un .");

	$("#guardarc").removeAttr('disabled');
}else{


var form= $("#formulario2").serialize();
$.ajax({
	type:"POST",
	url:"app/model/registro2.php",
	data:form
}).done(function(form){


	alert('Se han guardado los datos con exito');

	$("#nombre").val('');
	$("#cedula").val('');
	$("#email").val('');
	$("#direccion").val('');
	$("#telefono").val('');
	$("#razon").val('');	
	$("#rif").val('');			
	$("#guardarc").removeAttr('disabled');

});
}
	}
}
	}

			});

		$("#eliminarc").click(function(event){
			event.preventDefault();
var form= $("#formulario2").serialize();
			$.ajax({
	type:"POST",
	url:"app/model/borrar2.php",
	data:form
}).done(function(info){
	alert('Se han eliminado los datos');
	$("input").each(function(i){
		$(this).val('');
	});
});
		});


		$("#buscarc").click(function(event){
			event.preventDefault();
var form= $("#formulario2").serialize();
			$.ajax({
	type:"POST",
	url:"app/model/buscar2.php",
	dataType:"json",
	data:form
}).done(function(form){
	$("#nombre").val(form.nombre);
	$("#razon").val(form.razon);
	$("#telefono").val(form.telefono);
	$("#email").val(form.email);
	$("#direccion").val(form.direccion);
	$("#rif").val(form.rif);

});
		});

		/***/

		$("#buscarm").click(function(event){
			event.preventDefault();
var form= $("#formmodels").serialize();
			$.ajax({
	type:"POST",
	url:"app/model/buscarmodelos.php",
	dataType:"json",
	data:form
}).done(function(form){
	$("#cedula").val(form.cedula);
	$("#nombres").val(form.nombre);
	$("#edad").val(form.edad);
	/*PAIS Y ESTADO*/
	$("#email").val(form.email);
	$("#telefono").val(form.telefono);
	/*ESTATURA*/
	/*color de piel*/
	/*tipo de pelo*/
	/*medidas*/
	/*color de pelo*/

});
		});
		/***/

		$("#limpiarc").click(function(event){
			$("#nombre").val('');
	$("#cedula").val('');
	$("#cedulac").val('');
	$("#email").val('');
	$("#fax").val('');
	$("#direccion").val('');
	$("#precio").val('');
	$("#servicio").val('');
	$("#telefono").val('');
	$("#rif").val('');
	$("#razon").val('');

		});


$("#registro").click(function(event){
	event.preventDefault();
	var precios= $("#precios").serialize();

	$.ajax({
		type:"POST",
		url:"app/model/r_precios.php",
		data:precios
	}).done(function(data){
		alert('Se han registrado los precios');
	});
});

$(document).ready(function(){
			$("#cedula").keyup(function(event){
				
				//SE SERIALIZAN LOS DATOS PARA SER ENVIADOS
				//TAMBIEN ES POSIBLE ELEJIR CADA FORMULARIO Y OBTENER SUS VALORES INDEPENDIENTEMENTE
				var datos =$("#formulario").serialize();
				$("#dato").html("<h6> cargando... </h6>");
				//metodo AJAX, hay muchos mas  
				$.ajax({
					url: 'app/model/cliente.php',
					type: 'post',
					dataType: 'json',
					data: datos
				})
				.done(function(datos) {
					//FORMA DE RECIBIR LOS DATOS VIA JSON
					$("#dato").val(datos.nombre);
					$("#razon").val(datos.razon);
					
				});//FINAL DE LA FUNSION AJAX
				
			});

		});


			$("#cedula4").keyup(function(event){
				
				//SE SERIALIZAN LOS DATOS PARA SER ENVIADOS
				//TAMBIEN ES POSIBLE ELEJIR CADA FORMULARIO Y OBTENER SUS VALORES INDEPENDIENTEMENTE
				var datos2 =$("#formulario4").serialize();
				$("#dato").html("<h6> cargando... </h6>");
				//metodo AJAX, hay muchos mas  
				$.ajax({
					url: 'app/model/prespuestos.php',
					type: 'post',
					data: datos2
				})
				.done(function(datos2) {
					//FORMA DE RECIBIR LOS DATOS VIA JSON
				$("#dato").val('');
					$("#idas").html(datos2);//COMO HAGO PARA PONER EN OTRO SELECTOR SOLO UNA VARIABLE??
					
				});//FINAL DE LA FUNSION AJAX
				
			});

$("#r_presup").click(function(event){
	event.preventDefault();
	var form= $("#formulario").serialize();

$.ajax({
	type:"POST",
	url:"app/model/proceso.php",
	data:form

}).done(function(info){
	alert('Los datos se han guardado con exito');
});
	});


	});// CIERRE DE DOCUMENT READY...


/*
	como hago que esto me sirva para formulario1, para formulario2, para formulario3

*/

function mostrar(tgt){
		document.getElementById('1').style.display='none';
		document.getElementById('2').style.display='none';
		document.getElementById('3').style.display='none';
		document.getElementById('4').style.display='none';
		document.getElementById('5').style.display='none';
		document.getElementById('6').style.display='none';

		document.getElementById(tgt).style.display='block';
	}

	function mostra(){
		document.getElementById("presup").style.display='block';
		document.getElementById("datos").style.display='none';
	}

	function datos(){

		document.getElementById("presup").style.display='none';
		document.getElementById("datos").style.display='block';
	}
	function show(tgt){
		document.getElementById('1').style.display='none';
		document.getElementById('2').style.display='none';
		document.getElementById('3').style.display='none';
		document.getElementById('4').style.display='none';
		document.getElementById('5').style.display='none';
		document.getElementById('6').style.display='none';
		document.getElementById('77').style.display='none';
		document.getElementById('8').style.display='none';
		document.getElementById('datos').style.display='none';

		document.getElementById(tgt).style.display='block';
	}
function calculos(){
civa=document.getElementById('civa').value;
	

iva= 0.0;
subtotal=0.0;
total=0;
for(var i=1;i<=6;i++){
	

	precio_e=document.getElementById('price'+i).value;
	llamadas=document.getElementById('llamada'+i).value;
	horas=document.getElementById('hora'+i).value;

	precio= precio_e*(llamadas*horas);

	document.getElementById('precio'+i).value=precio;

	subtotal+=precio;
	iva=(subtotal*civa)/100;
	total=subtotal+iva;
document.getElementById('subtotal').value=subtotal;
document.getElementById('iva').value=iva;
document.getElementById('total').value=parseFloat(total);

}


	}


	function calculos2(){


civa=document.getElementById('civa').value;
iva2= 0.0;
subtotal2=0.0;
total2=0;

for(var i=1;i<=4;i++){
	price2=document.getElementById('price2'+i).value;
	horas2=document.getElementById('horas2'+i).value;

	precio2= (price2*horas2);

	document.getElementById('precio2'+i).value=precio2;

	subtotal2+=precio2;
	iva2=(subtotal2*civa)/100;
	total2=subtotal2+iva2;


document.getElementById('subtotal2').value=subtotal2;
document.getElementById('iva2').value=iva2;
document.getElementById('total2').value=parseFloat(total2);

}


	}



	function calculos3(){


civa=document.getElementById('civa').value;
iva3= 0.0;
subtotal3=0.0;
total3=0;

for(var i=1;i<=7;i++){
	price3=document.getElementById('price3'+i).value;
	horas3=document.getElementById('horas3'+i).value;

	precio3= (price3*horas3);

	document.getElementById('precio3'+i).value=precio3;

	subtotal3+=precio3;
	iva3=(subtotal3*civa)/100;
	total3=subtotal3+iva3;
document.getElementById('subtotal3').value=subtotal3;
document.getElementById('iva3').value=iva3;
document.getElementById('total3').value=parseFloat(total3);


}

	}
	function calculos4(){


civa=document.getElementById('civa').value;
iva4= 0.0;
subtotal4=0.0;
total4=0;

for(var i=1;i<=5;i++){
	price4=document.getElementById('price4'+i).value;
	horas4=document.getElementById('horas4'+i).value;

	precio4= (price4*horas4);

	document.getElementById('precio4'+i).value=precio4;

	subtotal4+=parseFloat(precio4);
	iva4=(subtotal4*civa)/100;
	total4=subtotal4+iva4;
document.getElementById('subtotal4').value=subtotal4;
document.getElementById('iva4').value=iva4;
document.getElementById('total4').value=parseFloat(total4);

}


	}


	function calculos5(){

civa=document.getElementById('civa').value;

iva5= 0.0;
subtotal5=0.0;
total5=0;

for(var i=1;i<=8;i++){
	price5=document.getElementById('price5'+i).value;
	horas5=document.getElementById('horas5'+i).value;

	precio5= (price5*horas5);

	document.getElementById('precio5'+i).value=precio5;

	subtotal5+=parseFloat(precio5);
	iva5=(subtotal5*civa)/100;
	total5=parseFloat(subtotal5)+iva5;
	
document.getElementById('subtotal5').value=subtotal5;
document.getElementById('iva5').value=iva5;
document.getElementById('total5').value=parseFloat(total5);
}



	}

	function calculos6(){


civa=document.getElementById('civa').value;

iva6= 0.0;
subtotal6=0.0;
total6=0;
precios=0;

for(var i=1;i<=5;i++){
	precios=document.getElementById('p'+i).value;

	if(!isNaN(parseFloat(precios))){

subtotal6+=parseFloat(precios);
iva6= parseFloat(subtotal6)*parseFloat(civa)/100;
total6= parseFloat(subtotal6)+iva6;

	}

}
document.getElementById('subtotal6').value=subtotal6;
document.getElementById('iva6').value=iva6;
document.getElementById('total6').value=total6;


	}


function maxylet(campo,limite){
		if(campo.value.length>=limite){
			campo.value=campo.value.substring(0,limite);
			
		}
	}


	function permite(elEvento, permitidos) {
  // Variables que definen los caracteres permitidos
  var numeros = "0123456789-,";
  var caracteres = " abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ@";
  var numeros_caracteres = numeros + caracteres;
  var teclas_especiales = [8, 37, 39, 46];
  // 8 = BackSpace, 46 = Supr, 37 = flecha izquierda, 39 = flecha derecha
 var num_car_g=numeros_caracteres;
 
  // Seleccionar los caracteres a partir del parámetro de la función
  switch(permitidos) {
    case 'num':
      permitidos = numeros;
      break;
    case 'car':
      permitidos = caracteres;
      break;
    case 'num_car':
      permitidos = numeros_caracteres;
      break;
      case 'num_car_g':
      permitidos= num_car_g;
      break;
  }
 
  // Obtener la tecla pulsada 
  var evento = elEvento || window.event;
  var codigoCaracter = evento.charCode || evento.keyCode;
  var caracter = String.fromCharCode(codigoCaracter);
 
  // Comprobar si la tecla pulsada es alguna de las teclas especiales
  // (teclas de borrado y flechas horizontales)
  var tecla_especial = false;
  for(var i in teclas_especiales) {
    if(codigoCaracter == teclas_especiales[i]) {
      tecla_especial = true;
      break;
    }
  }
 
  // Comprobar si la tecla pulsada se encuentra en los caracteres permitidos
  // o si es una tecla especial
  return permitidos.indexOf(caracter) != -1 || tecla_especial;
}



function guion(){
var value= document.getElementById("rif").value;


if(value.length==1){

	document.getElementById("rif").value=value+'-';
}

for(i=2;i<8;i++){
	if(value.length==10){

	document.getElementById("rif").value=value+'-';
	}
}
}


function guion2(){

var value= document.getElementById("telefono").value;


if(value.length==3){

	document.getElementById("telefono").value=value+'-';
}


for(i=2;i<8;i++){
	if(value.length==6){

	document.getElementById("telefono").value=value+'-';
	}
}


}

function cuotas(){
	opcion= document.getElementById("plan").value;
	

	if(opcion=='Triple cuota'){
		var monto= $("#precio").val();
		var total= monto/2;
		var veinticinco=(monto*25)/100;
		$("#mensaje").css("display","block");
		$("#cuotas").html('3');
		$("#montos").html(total);
		$("#montos2").html(veinticinco);
		$("#monto3").html(veinticinco);

	}else{
	if(opcion=='Doble cuota'){
		var monto= $("#precio").val();
		var total= monto/2;
		$("#mensaje").css("display","block");
		$("#cuotas").html('2');
		$("#montos").html(total);
	}

	}

	
}

$(document).ready(function(){
			$("#foto").change(function(event){
				var foto= $("#foto").val();

				if(foto=='foto'){

				var photo= document.getElementById("photo");
				var videos= document.getElementById("videos");
				var fotoyvideo= document.getElementById("fotoyvideo");
					photo.style.display='block';
					videos.style.display='none';
					fotoyvideo.style.display='none';
				}
					if(foto=='video'){

				var photo= document.getElementById("photo");
				var videos= document.getElementById("videos");
				var fotoyvideo= document.getElementById("fotoyvideo");
					videos.style.display='block';
					photo.style.display='none';
					fotoyvideo.style.display='none';
					}
					if(foto=='fotoyvideo'){

				var photo= document.getElementById("photo");
				var videos= document.getElementById("videos");
				var fotoyvideo= document.getElementById("fotoyvideo");
					fotoyvideo.style.display='block';
					photo.style.display='none';
					videos.style.display='none';
					}
				
			});

			//no se como hacer una funcion asi en jquery pero con  parametros
		});
	

function consultamodelos(nombre){
 if(nombre=='1'){

	$.post("unos.php", {valorBusqueda: nombre}, function() {
		alert('esta funcionandoo');
        });
 }
 if(nombre=='2'){

 	alert('hola jose');
 }
 
}
