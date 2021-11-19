<?PHP
	session_start();
	$_SESSION['nombre'] = 'Jose Luis Pimentel';
?>
<HTML>
	<HEAD>
	</HEAD>
	<BODY>
		<a href="pagina2.php">Página 2</a><br><br>
		<?=$_SESSION['nombre']?>
	</BODY>
</HTML>
