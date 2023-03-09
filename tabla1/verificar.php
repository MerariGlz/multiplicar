<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<title>Tabla de multiplicar - Resultados</title>
	
</head>
<body>
	<form action="index.html" align="center">
	<h1>Tabla de multiplicar - Resultados</h1>
	<table class="table">
  <thead class="thead-dark">
		<tr>
			<th scope="col">Multiplicando</th>
			<th scope="col">Resultado Ingresado</th>
			<th scope="col">Verificación</th>
		</tr>
		</thead>
  <tbody>
		<?php
		$numeroinicial=$_POST["numeroinicial"];
	    $numerofinal=$_POST["numerofinal"];
		$numero = $_POST['numero'];

		$resultados = array();
		for ($i = $numeroinicial; $i <= $numerofinal; $i++) {
			$resultados[$i]=$_POST["resultados".$i];
		}
		
		$correctos=0;
		$incorrectos=0;
		for ($i = $numeroinicial; $i <= $numerofinal; $i++) {
			$resultado_esperado = $numero * $i;
			if ($resultado_esperado == $resultados[$i]) {
				$verificacion = '<span class="correcto" style="color:green">Correcto <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
					<path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
				  </svg></span>';
				$correctos++;
			} else {
				$verificacion = '<span class="incorrecto" style="color:red">Incorrecto <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
					<path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
				  </svg></span>';
				$incorrectos++;
			}
			echo "<tr>";
			echo "<td>$numero X $i =</td>";
		
			echo "<td>$resultados[$i]</td>";
			echo "<td>$verificacion</td>";
			echo "</tr>";
		}
		
		?>
	</form>
	</tbody>

	</table><?php
	if($correctos==10)
		{
			echo '<label>FELICIDADES <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-smile" viewBox="0 0 16 16">
			<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
			<path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
		  </svg></label><br>';
		}
		?>
	    <br><label>Correctos = <?php echo $correctos ?></label><br>
		<label>Incorrectos = <?php echo $incorrectos ?></label><br><br>
	<button class="btn btn-danger"type="submit">Regresar</button>

</body>
</html>
<?php
$correoP="asda";
$nombreP="asdad";
$idTablaP=1;
$calificacionP=5;
$incorrectasP=$incorrectos;
$correctasP=$correctos;
$tablaP=$numero;

$insertar="INSERT INTO usuario (id,Nombre,Correo,idTabla) VALUES (NULL,'$nombreP','$correoP',$idTablaP);";
$insertar2="INSERT INTO tabla (id,Tabla,Correctas,Incorrectas,Calificacion) VALUES (NULL,$tablaP,$correctasP,$incorrectasP,$calificacionP);";
$servername = "localhost";
$database = "tabla";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
$resultado = mysqli_query($conn, $insertar);
$resultado2 =mysqli_query($conn,$insertar2);
if (!$resultado && !$resultado2) 
{
	?>
	<h1>ERROR</h1>
	<?PHP 
}
?>
