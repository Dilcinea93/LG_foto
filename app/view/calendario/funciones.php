
<script type="text/javascript" src="../../../lib/js/funciones.js"></script>
<?php
	function texto($name){
		?>
			<input type="text" name="<?=$name?>" onkeypress="return permite(event,'car')"  class="form-control centrarTexto">

		<?
	}
?>
