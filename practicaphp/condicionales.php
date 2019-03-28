<!DOCTYPE html>
<html>
<head>
	<title>FFF</title>
</head>
<body>
	<?php //CONDICIOANLES
		echo "<h1>CONDICIONALES EN PHP</h1>
		<br> <h2>Conficional if</h2>";

		$edad= 17;

		if ($edad < 18) {
		echo "Es menor de Edad";

		}

		echo "</h2> Condicional switch </h2>";
		
		$accion= "guardar";
		
		switch ($accion) {
		 	case 'guardar':
		 	echo "El usuario eligio GUARDAR";
		 	break;

			case 'modificar':
		 	echo "El usuario eligio MODIFICAR";
		 	break;

			case 'eliminar':
		 	echo "El usuario eligio ELIMINAR";
		 	break;

		 	default:
		 	echo "El usuario no eligio nunguna accion";
		 	break;
	
			}

			?>

	</body>
	</html>
	