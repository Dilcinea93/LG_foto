<?
	include('../../config.php');
extract($_POST);


	$fecha=date("Y/n/d");

$conexion->query("insert into registro_p set 
id_c='$cedula',
nombre_p='$nombre_p',
	precio='$precio',
	fecha='$fecha',
	compra='$foto',
paquete='$paquete',
modalidad='$modo', 
oferta='$oferta',
razon='$razon'
");
?>

<?

/*
		aqui vuelve a pasar lo mismo pero con la diferencia d que aqui no hay on duplicate key update

	aqui esto me guarda

	insert into registro_p set 
id_c='$cedula',
nombre_p='$nombre_p',
	precio='$precio',
	fecha='$fecha'


esto no me guarda 

id_c='$cedula',
nombre_p='$nombre_p',
	precio='$precio',
	fecha='$fecha',
	compra='$foto',
paquete='$paquete'

si le quito el campo compra y paquete si guarda. si se los quito no guarda.

y la razon es que el campo compra no existia n la base de datos. me pregunto porque ntonces no me daba un
error qu dijra UNKNOW COMPRA FIELD algo asi...

lo cree y se arreglo
*/
?>