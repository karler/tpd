<?PHP
	$caducidad = time()+600;
	setcookie('idioma','it',$caducidad)
?>

<HTML>
	<HEAD>
	</HEAD>
	<BODY>
		<h2>Hola <?=$_COOKIE['idioma']?></h2>
	</BODY>
</HTML>