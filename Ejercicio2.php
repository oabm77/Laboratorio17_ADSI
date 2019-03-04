<html>
<head>
	<title>Ejercicio 2</title>
</head>
<body>
	<h1>Salario total de vendedor</h1>
	<form method="POST" action="Ejercicio2_calculoSalarioTotal.php">
		<label for="nombre">Nombre del vendedor: </label>
		<input type="text" name="nombre" required><br>
		<label for="cantidad">Cantidad de automóviles vendidos:</label>
		<input type="number" name="cantidad" required><br>
		<label for="precioTotal">Precio Total Automóviles vendidos:</label>
		<input type="number" name="precioTotal" required><br>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>