<html>
<head>
	<title>Ejercicio 1</title>
</head>
<body>
	<h1>calcular la nota final de una materia</h1>
	<?php 
	$parcial1 = isset($_POST['parcial1']) && !empty($_POST['parcial1']) ?$_POST['parcial1']:0;
	$parcial2 = isset($_POST['parcial2']) && !empty($_POST['parcial2']) ?$_POST['parcial2']:0;
	$parcial3 = isset($_POST['parcial3']) && !empty($_POST['parcial3']) ?$_POST['parcial3']:0;
	$promedioParciales = ($parcial1 + $parcial2 + $parcial3)/3;
	$acumuladoParciales = $promedioParciales * 0.35;
	$examenFinal = isset($_POST['examenFinal']) && !empty($_POST['examenFinal']) ?$_POST['examenFinal']:0;
	$acumuladoExamenFinal = $examenFinal * 0.35;
	$trabajoFinal = isset($_POST['trabajoFinal']) && !empty($_POST['trabajoFinal']) ?$_POST['trabajoFinal']:0;
	$acumuladoTrabajoFinal = $trabajoFinal * 0.30;
	 ?>
	<p>35% del promedio de sus los 3 parciales. <?php echo $acumuladoParciales; ?> </p>
	<p>35% de la calificación del examen final. <?php echo $acumuladoExamenFinal; ?></p>
	<p>30% de la calificación de un trabajo final. <?php echo $acumuladoTrabajoFinal; ?></p>
	<?php 
		$notaFinal = $acumuladoParciales + $acumuladoExamenFinal + $acumuladoTrabajoFinal;
	?>
	<p>Nota final = <?php echo $notaFinal; ?></p>	
	<?php 
		echo '<p>'.($notaFinal >= 3?'Aprobó':'No aprobó').'</p>';
	 ?>

	<button onclick="window.location.href = 'Ejercicio1.php';">Volver</button>
</body>
</html>