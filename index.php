<!DOCTYPE html>
<html>
<head>
	<title>PREDICTOR DE PICO-PLACA</title>
</head>
<body>
	<h2>Predictor de PICO-PLACA</h2>
	<form action="calcular.php" role="form" name="frmLogeo" method="POST">
		<div>
			<label>Numero de Matricula :</label>
			<input type="text" id="placa" name="placa" required>
		</div><br>
		<div>
			<label>Fecha :</label>
			<input type="date" id="fecha" name="fecha" required>
		</div><br>
		<div>
			<label>Hora :</label>
			<input type="time" id="hora" name="hora" required>
		</div><br>
		<button type="submit">Calcular</button><hr>
	</form>
	<a href="ejemplos.php"><button>Ver Ejemplos</button></a>
</body>
</html>