<!SECCION BUSQUEDA>
	<form method="GET">

	<h2>Busqueda Registro</h2>
	<table width="200" border="1">
		<tr>
			<td colspan="2">&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>Nombre</td>
			<td><input type="text" name="nombre" id="nombre"/></td>
		</tr>
		<tr>
			<td>Departamento</td>
			<td><input type="text" name="departamento" id="departamento" ></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="buscar" value="Buscar" id="buscar"><input type="button" name="agregar" value="(+)Agregar" id="agregar" onclick='window.location="index.php?buscar=NEW"'></td>
			<td>&nbsp;</td>
		</tr>
	</table>
	</form>


