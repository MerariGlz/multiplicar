<!DOCTYPE html>
<html>
<head>
	<title>Tabla de multiplicar</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <head>
</head>
<body>
	<?php
	$numero =$_POST['numero'];
	$numeroinicial =$_POST['numeroinicial'];
	$numerofinal =$_POST['numerofinal'];
	?>
	<div align="center">
	<h1>Tabla de multiplicar</h1>
	<form method="post" action="verificar.php">
	<input type="hidden" name="numero" value="<?php echo $numero ?>">
	<input type="hidden" name="numeroinicial" value="<?php echo $numeroinicial ?>">
	<input type="hidden" name="numerofinal" value="<?php echo $numerofinal ?>">

		<table class="table table-activate table-sm" border="1">
		
			<tr align="center">
				<th>Multiplicando</th>
				
				<th>Resultado</th>
			</tr>
			<?php
			
			for ($i = $numeroinicial; $i <= $numerofinal; $i++) {
			
				echo "<tr>";
				echo "<td align='center'>$numero X $i =</td>";
			
				echo "<td align='center'><input type='number' name='resultados".$i."' required></td>";
				echo "</tr>";
			}
			?>
		</table>
		<br>
		<input class="btn btn-success" type="submit" value="Verificar">
	</form></div>
</body>
</html>