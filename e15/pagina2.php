<?PHP
	session_start();
	if (isset($_SESSION['nombre'])){
		echo "Hola ".$_SESSION['nombre'];
	} else {
		//SE envía a login.php
	}
?>

<HTML>
	<HEAD>
	</HEAD>
	<BODY>
		<a href="pagina2.php">Página 2</a><br><br>
		<?=$_SESSION['nombre']?>
	</BODY>
</HTML>
<?PHP
	session_destroy();
?>