<?PHP
	switch ($_COOKIE['idioma']){
		case 'es':
			$mensaje = 'Bienvenido';
			break;
		case 'en':
			$mensaje = 'Welcome';
			break;
		case 'it':
			$mensaje = 'Benvenuto';
			break;
		case 'fr':
			$mensaje = 'Bienvenue';
			break;
	}
?>


<HTML>
	<HEAD>
	</HEAD>
	<BODY>
		<h2><?=$mensaje?></h2>
	</BODY>
</HTML>