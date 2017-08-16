<?
	$modulo= $_GET['id'];
	if(empty($modulo)){?>

	<a href="?id=chck">href</a><?
	}else{
	include_once('modulo/'.$modulo.'.php');
	}
	?>
