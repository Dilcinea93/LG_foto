<?
		/*mostrar foto de modelo. Pero pendiente de la ruta... */
$user="root";$pass="1234";$host="localhost";$db="l_g_fotografia2";$adminemail="";
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