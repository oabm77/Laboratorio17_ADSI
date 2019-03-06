<html>
<head>
	<title>Ejercicio 5</title>
</head>
<body>
	<h1>Precio de productos con descuento</h1>
	<form method="POST" action="Ejercicio5_productoClaveDescuento.php">
		<label for="nombre">Nombre producto</label>
		<input type="text" name="nombre" placeholder="Ingrese nombre del producto" required autocomplete="off"><br>
		<label for="clave">Clave</label>
		<select name="clave" required>
			<option disabled selected>Seleccione la clave</option>
			<option value="1">1</option>
			<option value="2">2</option>
		</select><br>
		<label for="precioO">Precio Original</label>
		<input type="number" name="precioO" required autocomplete="off"><br>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>