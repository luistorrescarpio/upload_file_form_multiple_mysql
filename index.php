<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Subir Archivo</title>
</head>
<body>
	<center>
		<h3>Upload File Multiple in &lt;form&gt; y Mysql</h3>
		<a href="archivos_registrados.php">Ver archivos Registrados</a>
		<br><br>
		<form enctype="multipart/form-data" action="consultas.php"  method="POST">
			<input name="action" type="hidden" value='registerFile'/>
			<input name="uploaded_file[]" type="file" multiple/>
			<br><br>
			<input type="submit" value="Subir Archivos y Registrarlos" />
		</form>
		
	</center>
</body>
</html>