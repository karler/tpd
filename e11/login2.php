<?php
	$edad = $_REQUEST["edad"];
	echo "Tu edad: $edad<br>";
	if ($edad <18){
		echo "No puedes ingresar";
	}else{
		echo "Bienvenido";
	}
?>