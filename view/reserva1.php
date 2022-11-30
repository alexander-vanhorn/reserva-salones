<?php
 require("header.php");
?>

<!DOCTYPE HTML>
<html lang="es">
	<head>
	<link rel="stylesheet" href="CSS/reserva.css">
		<meta charset="utf-8" />
		<title>Reserva</title>
	</head>
	<body>
		
		<br>
		
		<form action="" method="POST" enctype="multipart/form-data">
		<h1>Reserva</h1>
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

<?php
 require("footer.php");
?>

