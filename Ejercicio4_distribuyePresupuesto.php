<?php 
$areas = array('Ginecología' => 0.4, 'Traumatología' => 0.3, 'Pediatría' => 0.3);
$presupuesto = isset($_POST['presupuesto']) && $_POST['presupuesto'] != ''?$_POST['presupuesto']:0;
 ?>
<html>
<head>
	<title>Ejercicio 4</title>
</head>
<body>
	<h1>Distribución del presupuesto anual</h1>
	<h2>Total presupuesto: $<?php echo $presupuesto; ?></h2>
	<table border="1">
		<thead>
			<tr>
				<th>Área</th>
				<th>Porcentaje del presupuesto</th>
				<th>Cantidad a recibir</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			foreach ($areas as $key => $value) {
				echo "<tr>
						<td>$key</td>
						<td>".($value * 100)."%</td>
						<td>$".($presupuesto * $value)."</td>
					</tr>";
			}
			 ?>
		</tbody>
	</table>
	<button onclick="window.location.href = 'Ejercicio4.php';">Volver</button>
</body>
</html>