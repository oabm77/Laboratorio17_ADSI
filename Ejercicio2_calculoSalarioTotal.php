<?php 
	$nombre = isset($_POST['nombre']) && !empty($_POST['nombre']) ?$_POST['nombre']:'Nombre no registrado';
	$cantidad = isset($_POST['cantidad']) && !empty($_POST['cantidad']) ?$_POST['cantidad']:0;
	$precioTotal = isset($_POST['precioTotal']) && !empty($_POST['precioTotal']) ?$_POST['precioTotal']:0;
	$salarioBasico = 450000;
	$comision = 50000* $cantidad;
	$porcentaje = $precioTotal * 0.05;
	$salarioTotal = $salarioBasico + $comision + $porcentaje;
?>
<html>
<head>
	<title>Ejercicio2</title>
</head>
<body>
	<h1>Salario total de vendedor <?php echo $nombre; ?></h1>
	<ul>
		<li>Salario básico de $450000 mensuales.</li>
		<li>Comisión de $50000 por cada automóvil vendido: $<?php echo $comision; ?></li>
		<li>5% del valor de la venta: $<?php echo $porcentaje; ?></li>
	</ul>
	<p>Salario total a pagar: $<?php echo $salarioTotal; ?></p>
	<button onclick="window.location.href = 'Ejercicio2.php';">Volver</button>
</body>
</html>