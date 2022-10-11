<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Registro</title>
	</head>
	<body>
		<h1>Registro</h1>
		
		<form action="" method="POST" enctype="multipart/form-data">
			<label for="nombre">Nombre: </label>
			<p><input type="text" name="nombre" /></p>
			
			<label for="apellido">Apellido: </label>
			<p><input type="text" name="apellido" /></p>

            <label for="cedula">Cedula: </label>
			<p><input type="text" name="cedula" /></p>

            <label for="hora-entrada">Hora de entrada: </label>
			<p><input type="text" name="hora-entrada" /></p>

            <label for="hora-salida">Hora de salida: </label>
			<p><input type="text" name="hora-salida" /></p>


            
            <label for="motivo">Motivo de reserva: </label>
			
			<br/>
			<p><textarea></textarea></p>

			<br/>

            Facultad:
			<select name="peliculas">
				<option value="Cienci-tecnologia">Facultad de Ciencias y Tecnología</option>
				<option value="civil">Facultad de Ingeniería Civil</option>
				<option value="electrica">Facultad de Ingeniería Eléctrica</option>
				<option value="industrial">Facultad de Ingeniería Industrial</option>
                <option value="mecanica">Facultad de Ingeniería Mecánica</option>
				<option value="sistema-computacional">Facultad de Ingeniería de Sistemas Computacionales</option>
			</select>

            <br/>

		
			<input type="submit" value="Enviar" />
		</form>
		
	</body>
</html>
