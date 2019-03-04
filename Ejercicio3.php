<html>
<head>
	<title>Ejercicio 3</title>
</head>
<body>
	<h1>Indice de Masa Corporal</h1>
	<form method="POST" action="Ejercicio3_indiceMasaCorporal.php">
		<label for="nombre">Nombre del paciente:</label>
		<input type="text" name="nombre" required><br>
		<label for="peso">Peso en Kilogramos:</label>
		<input type="number" name="peso" step="any" required><br>
		<label for="estatura">Estatura en metros:</label>
		<input type="number" name="estatura" step="any" required><br>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>