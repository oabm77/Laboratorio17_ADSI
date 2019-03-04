<html>
<head>
	<title>Ejercicio 1</title>
</head>
<body>
	<h1>calcular la nota final de una materia</h1>
	<form method="POST" action="Ejercicio1_calculoNotaFinal.php">
		Parcial 1: <input type="number" name="parcial1" min="0" max="5" step="0.1"><br>
		Parcial 2: <input type="number" name="parcial2" min="0" max="5" step="0.1"><br>
		Parcial 3: <input type="number" name="parcial3" min="0" max="5" step="0.1"><br>
		Examen Final: <input type="number" name="examenFinal" min="0" max="5" step="0.1"><br>
		Trabajo Final: <input type="number" name="trabajoFinal" min="0" max="5" step="0.1"><br>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>