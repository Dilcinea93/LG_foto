<?
	
	function text($nombre,$id,$place){

		?>
		<input type="text" placeholder="<?=$place?>" id="<?=$id?>" name="<?=$nombre?>" onkeyup="maxylet(this,30);" onkeypress="return permite(event, 'car')" >
		
		<?
	};
function number($nombre,$id){
	?>
		<input type="text" placeholder="<?=$place?>" id="<?=$id?>" name="<?=$nombre?>" onkeyup="maxylet(this,10);" onkeypress="return permite(event, 'num')" >
		
		<?
};

function rif($nombre,$id){
?>
		<input type="text" placeholder="<?=$place?>" id="<?=$id?>" name="<?=$nombre?>" onkeyup="maxylet(this,10);" onkeypress="return permite(event, 'num_car_g')" >
		
		<?
}

	function ci($nombre,$id){
		


		?>

<div id="prueba">
		<select id="cedulas" class="browser-default smallest">
				<option>
					E
				</option>
				<option>V</option>
				<option>P</option>
			</select>
		<input type="text" placeholder="<?=$place?>" id="<?=$id?>" name="<?=$nombre?>" onkeyup="maxylet(this,8);" class="smallest"  onkeypress="return permite(event, 'num')" >
		</div>
		<?
	};


	function tlf($nombre,$id){
?>

<div id="prueba">
		<select id="cedulas" class="browser-default smallest">
				<option>0414</option>
				<option>0424</option>
				<option>0416</option>
				<option>0426</option>
				<option>0412</option>
				<option>0212</option>
			</select>
		<input type="text" placeholder="<?=$place?>" id="<?=$id?>" name="<?=$nombre?>" onkeyup="maxylet(this,7);" class="smallest" onkeypress="return permite(event, 'num')" >
		</div>
<?
	};

?>