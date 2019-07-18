<html>
	<head>
		<title>Formulario</title>
	</head>
	<body>
	<form name="fdatos" method="GET" action="recibe.php">
		<table border="1">
			<tr>
				<th>RUT</th>
				<td>
					<input type="text" name="txt_rut" maxlength="8" style="width:100px;" placeholder="Ingrese RUT" required>-
					<input type="text" name="txt_dv" maxlength="1" style="width:25px;" required>
				</td>
			</tr>
			<tr>
				<th>NOMBRE</th>
				<td>
					<input type="text" name="txt_nombre" required>
				</td>
			</tr>
			<tr>
				<th>EMAIL</th>
				<td>
					<input type="email" name="txt_email" required>
				</td>
			</tr>
			<tr>
				<th>SEXO</th>
				<td>
					<input type="radio" name="txt_sexo" value="femenino" required>
					Femenino /
					<input type="radio" name="txt_sexo" value="masculino" required>
					Masculino
				</td>
			</tr>
			<tr>
				<th>COMENTARIO</th>
				<td>
					<textarea name="txt_com" placeholder="Ingrese Comentarios..."></textarea>
				</td>
			</tr>	
			<tr>
				<th>COMUNA</th>
				<td>
					<select name="txt_comuna">
						<option value="0">Seleccionar...</option>
						<option value="Las Condes">Las Condes</option>
						<option value="Maipu">Maipu</option>
						<option value="Santiago">Santiago</option>
						<option value="Renca">Renca</option>
						<option value="Providencia">Providencia</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<button type="submit" name="btn_enviar">
						ENVIAR
					</button>
					<button type="reset" name="btn_limpiar">
						LIMPIAR DATOS
					</button>				
				</td>
			</tr>
		</table>
	</form>
	</body>
</html>