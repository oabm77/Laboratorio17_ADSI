<?php 
$nombre = isset($_POST['nombre']) && !empty($_POST['nombre'])?$_POST['nombre']:'Nombre no registrado';
$peso = isset($_POST['peso']) && !empty($_POST['peso'])?$_POST['peso']:0;
$estatura = isset($_POST['estatura']) && !empty($_POST['estatura'])?$_POST['estatura']:0;
$imc = $peso / pow($estatura, 2); // cálculo del índice de masa corporal
 ?>
<html>
<head>
	<title>Ejercicio 3</title>
</head>
<body>
	<h1>Indice de Masa Corporal de <?php echo $nombre; ?></h1>
	<table style="border: 1px solid black;">
		<thead>
			<tr>
				<th>ÍNDICE DE MASA CORPORAL</th>
				<th>CATEGORÍA</th>
			</tr>
		</thead>
		<tbody>
			<tr bgcolor=<?php echo $imc < 18.5?'cyan':'' ?>>
				<td>
					Por debajo de 18.5
				</td>
				<td>
					Por debajo del peso
				</td>
			</tr>
			<tr bgcolor=<?php echo $imc >= 18.5 && $imc <= 24.9?'cyan':'' ?>>
				<td>18.5 a 24.9</td>
				<td>Saludable</td>
			</tr>
			<tr bgcolor=<?php echo $imc >= 25.0 && $imc <= 29.9?'cyan':'' ?>>
				<td>25.0 a 29.9</td>
				<td>Con sobrepeso</td>
			</tr>
			<tr bgcolor=<?php echo $imc >= 30.0 && $imc <= 39.9?'cyan':'' ?>>
				<td>30.0 a 39.9</td>
				<td>Obeso</td>
			</tr>
			<tr bgcolor=<?php echo $imc >= 40?'cyan':'' ?>>
				<td>Más de 40</td>
				<td>Obesidad mórbida</td>
			</tr>
		</tbody>
	</table>
	<button onclick="window.location.href = 'Ejercicio3.php';">Volver</button>
</body>
</html>