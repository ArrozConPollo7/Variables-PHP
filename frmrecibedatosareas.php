<!DOCTYPE html>
<html>
<head>
	<title>Cálculo de áreas</title>
</head>
<body>
	<h1>Áreas calculadas</h1>
	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$radio = $_POST["radio"];
			$lado = $_POST["lado"];
			$base = $_POST["base"];
			$altura = $_POST["altura"];

			$area_circulo = round(pi() * $radio * $radio, 2);
			$area_cuadrado = $lado * $lado;
			$area_triangulo = ($base * $altura) / 2;

			echo "<p>El área del círculo es: $area_circulo</p>";
			echo "<p>El área del cuadrado es: $area_cuadrado</p>";
			echo "<p>El área del triángulo es: $area_triangulo</p>";
		}
	?>
</body>
</html>