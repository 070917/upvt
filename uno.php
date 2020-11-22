<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Prueba 1</title>
</head>
<body>
	<form action="" method="post">
		Número 1: <input type="text" name="num1">
		<br>
		<input type="submit" value="Generar" name="boton">
	</form>
	<?php
		//Saber si existe una variable
		if(isset($_POST["boton"])){
			//$_POST -> obtener informacion
			$numero1 = $_POST["num1"];
			for ($i=0; $i < $numero1; $i++) { 
				for ($j=0; $j < $numero1; $j++) { 
					echo " * &nbsp;";
				}
				echo "<br>";
			}
		}
	?>
</body>
</html>