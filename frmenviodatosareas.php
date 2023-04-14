<!DOCTYPE html>
<html>
<head>
	<title>Formulario de envío de datos para calcular áreas</title>
</head>
<body>
	<h1>Calculadora de áreas</h1>
	<form action="frmrecibedatosareas.php" method="POST">
		<label for="radio">Radio del círculo:</label>
		<input type="number" id="radio" name="radio" required>
		<br>
		<label for="lado">Lado del cuadrado:</label>
		<input type="number" id="lado" name="lado" required>
		<br>
		<label for="base">Base del triángulo:</label>
		<input type="number" id="base" name="base" required>
		<br>
		<label for="altura">Altura del triángulo:</label>
		<input type="number" id="altura" name="altura" required>
		<br>
		<input type="submit" value="Calcular">
	</form>
</body>
</html>