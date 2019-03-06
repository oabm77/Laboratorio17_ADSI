<?php 
	$nombre = $_POST['nombre'];
	$clave = $_POST['clave'];
	$descuento = $clave==1?0.1:0.2;
	$precioO = isset($_POST['precioO']) && $_POST['precioO'] != ''?$_POST['precioO']:0;

?>
<html>
<head>
	<title>Ejercicio 5</title>
</head>
<body>
	<h1>Precio de producto <?php echo $nombre; ?> con descuento</h1>
	<h3>Precio Original: $<?php echo $precioO; ?></h3>
	<h3>Clave: <?php echo "$clave - Descuento del ".($descuento*100)."%"; ?></h3>
	<h3>Precio con Descuento: $<?php echo $precioO * (1-$descuento);?></h3>
	<button onclick="window.location.href = 'Ejercicio5.php';">Volver</button>
</body>
</html>