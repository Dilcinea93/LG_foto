
<h2>Registro de modelos</h2>
<hr style="width:400px;"/>
<form name="form" action="../model/registromodelos.php" method="post" enctype="multipart/form-data">

	
		<table  id="table2" border="0" class="tablet">
			<tr>
				<td> 
				Placa:<br/>

					<input type="text" id="small"  name="cedula" />
			
			</td>
				<td>
					<input type="submit" id="small" value="Guardar" name="guardar" onclick="return v_req();"/>
				</td>
				
				
			</tr>
		</table>
	<br/>	

 <table id="table2" border="0" class="tablet">
		
			<td> 
				Foto:<br/>
				<input type="file" name="foto" class="midtxt" onchange="
					this.style.display='none';
					document.getElementById('msj').style.display='';
				">
				<span id="msj" style="display:none;">
					<b>La Imagen ha sido Cargada</b>
				</span>
			</td> 
		</tr>
	</table>
	
</form>