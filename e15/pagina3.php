<?PHP
	session_start();
	if (isset($_SESSION['nombre'])){
		echo "Hola ".$_SESSION['nombre'];
	} else {
		echo "No hay ningún nombre";
	}
?>