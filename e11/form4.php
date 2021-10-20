<html>

<body>
	
	<?php
	  if(isset($_REQUEST["nombre"])){
		$nombre = $_REQUEST["nombre"];
	  }else{
		$nombre = "";
	  }
		if(isset($_REQUEST["apellidos"])){
			$apellidos = $_REQUEST["apellidos"];
		}else{
			$apellidos = "";
		  }
	?>
	
	<?PHP echo "$nombre $apellidos"; ?>
	<form method="GET" action="form4.php">
		<label>Nombre: </label>
		<input type="text" name="nombre" value="<?PHP echo $nombre; ?>">
		<label>Apellidos: </label>
		<input type="text" name="apellidos" value="<?PHP echo $apellidos; ?>">
		<input type="submit">
	</form>
</body>

</html>