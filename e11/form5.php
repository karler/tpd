<html>

<body>
	
	<?php
	  if(isset($_REQUEST["num1"])){
	  	$num1 = $_REQUEST["num1"];
	  }else{
	  	$num1 = "";
	  }
		if(isset($_REQUEST["num2"])){
			$num2 = $_REQUEST["num2"];
		}else{
			$num2 = "";
		  }
	?>
	
	<form method="GET" action="form5.php">
		<label>Numero 1: </label>
		<input type="number" name="num1" value="<?PHP echo $num1; ?>">
		<label>Numero 2: </label>
		<input type="number" name="num2" value="<?= $num2 ?>">
		<input type="submit" value="Sumar">
	</form>
	<?PHP
		if ($num1<>"" and $num2<>""){
			$c = $num1 + $num2;
			echo "$num1 + $num2 = $c";
		}else{
			echo "No hay valores";
		}
	?>
</body>

</html>