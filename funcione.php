<?
	
	function text($nombre,$id,$place){

		?>
		<input type="text" placeholder="<?=$place?>" id="<?=$id?>" name="<?=$nombre?>" onkeyup="maxylet(this,50);" onkeypress="return permite(event, 'car')" >
		
		<?
	};
function email($nombre,$id,$place){?>
	<input type="text" placeholder="<?=$place?>" id="<?=$id?>" name="<?=$nombre?>" onkeyup="maxylet(this,50);" onkeypress="return permite(event, 'num_car')" >
		<?
}
function edad($nombre,$id){
?>
<select class="browser-default" name="<?=$nombre?>" id="<?=$id?>">
	<?
		for($c=3;$c<=40;$c++){
			?>
				<option><?echo $c?></option>
			<?
		}
	?>
</select>

<?
}

	function contar($nombre,$id){
		?>

		<input type="number" name="<?=$nombre?>" id="<?=$id?>" style="width:70%;float:left;" min="0" max="2">
		<?
	}
function number($nombre,$id){
	?>
		<input type="text" placeholder="<?=$place?>" id="<?=$id?>" name="<?=$nombre?>" onkeyup="maxylet(this,10);" onkeypress="return permite(event, 'num')">
		
		<?
};

function numbera($nombre,$id){
	?>
		<input type="text" placeholder="<?=$place?>" id="<?=$id?>" name="<?=$nombre?>" onkeyup="maxylet(this,10);" onkeypress="return permite(event, 'num')" width="5%">
		
		<?
};


function rif($nombre,$id){
?>
		<input type="text" placeholder="<?=$place?>" id="<?=$id?>" name="<?=$nombre?>" onkeyup="maxylet(this,25);" onkeypress="return permite(event, 'num_car_g')" >
		
		<?
}

function rif2($id){?>
	<input type="text" id="<?=$id?>" name="rif" onkeyup="guion()" maxlength="12" placeholder="GUIOON">
	<?
}

	function ci($nombre,$id){
		


		?>

<div id="prueba">
		<select id="naci" name="naci" class="browser-default smallest">
				<option>
					E
				</option>
				<option>V</option>
				<option>P</option>
			</select>
		<input type="text" id="<?=$id?>" name="<?=$nombre?>" onkeyup="maxylet(this,8);" class="smallest"  onkeypress="return permite(event, 'num')" >
		</div>
		<?
	};


	function tlf($nombre,$id,$cod,$code){

		?>

		<?
?>
<div >
	</br>
<span id="red">*</span><span class="etiquetas">Tel&eacute;fono</span>
		</div>

<div id="prueba">

		<select id="<?=$cod?>" name="<?=$code?>" class="browser-default smallest">
				<option>0414</option>
				<option>0424</option>
				<option>0416</option>
				<option>0426</option>
				<option>0412</option>
				<option>0212</option>
			</select>
		<input type="text" placeholder="<?=$place?>" id="<?=$id?>" name="<?=$nombre?>" onkeyup="guion2()" class="smallest" onkeypress="return permite(event, 'num')" maxlength="9">
		</div>
<?
	};


	function calculos($nombre,$id,$rw){
		?><input type="text" class="smallest" name="<?=$nombre?>" id="<?=$id?>" value="<?=$rw?>" onkeyup="maxylet(this,10)" onkeypress="return permite(event, 'num')">
		
		<?
	}


	function calculos_R_O($nombre,$id,$rw){
		?><input type="text" class="smallest" name="<?=$nombre?>" id="<?=$id?>" value="<?=$rw?>" onkeyup="maxylet(this,10)" onkeypress="return permite(event, 'num')" >
		
		<?
	}

	function hiden($nombre,$id){
		?>
		<input type="hidden" class="smallest" name="<?=$nombre?>" id="<?=$id?>" value="1" onkeyup="maxylet(this,10)" onkeypress="return permite(event, 'num')">
		
		<?
	}

function onkeycalc($nombre,$id){
		?>
		<input type="text" class="smallest" name="<?=$nombre?>" id="<?=$id?>" value="1" onkeyup="calculos($nombre,$id)" onkeypress="return permite(event, 'num')">
		
		<?
}

function adress($nombre,$id,$provincia,$id2){
		?>
	<div id="direccion" style="height:30px;">	


<select name=<?=$nombre?> id="<?=$id?>"class="browser-default" onchange="cambia_provincia()">
<option value="0" selected>Seleccione...
<option value="1">Aragua
<option value="2">Apure
<option value="3">Amazonas
<option value="4">Anzoategui
<option value="5">Barinas
<option value="6">Bolivar
<option value="7">Carabobo
<option value="8">Cojedes
<option value="9">Delta Amacuro
<option value="10">Distrito Capital
<option value="11">falcón
<option value="12">Guárico
<option value="13">Lara
<option value="14">Mérida
<option value="15">Miranda
<option value="16">Monagas
<option value="17">Nueva esparta
<option value="18">Portuguesa
<option value="19">Sucre
<option value="20">Táchira
<option value="21">Trujillo
<option value="22">Vargas
<option value="23">Yaracuy
<option value="24">Zulia
</select>

<select name=<?=$provincia?> id="<?=$id2?>" class="browser-default" style="margin-left:40px;">
<option value="-">-
</select>
</div>
		<?
	}

	function adresconsulta($nombre,$id){
		?>
			<div id="direccion" style="height:30px;">	


<select name=<?=$nombre?> id="<?=$id?>"class="browser-default" onchange="cambia_provincia()">
<option value="0" selected>Seleccione...
<option value="1">Aragua
<option value="2">Apure
<option value="3">Amazonas
<option value="4">Anzoategui
<option value="5">Barinas
<option value="6">Bolivar
<option value="7">Carabobo
<option value="8">Cojedes
<option value="9">Delta Amacuro
<option value="10">Distrito Capital
<option value="11">falcón
<option value="12">Guárico
<option value="13">Lara
<option value="14">Mérida
<option value="15">Miranda
<option value="16">Monagas
<option value="17">Nueva esparta
<option value="18">Portuguesa
<option value="19">Sucre
<option value="20">Táchira
<option value="21">Trujillo
<option value="22">Vargas
<option value="23">Yaracuy
<option value="24">Zulia
</select>
</div>
		<?
	}
?>
