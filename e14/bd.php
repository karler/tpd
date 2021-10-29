<?PHP
	// Variables
	$hostDB = 'localhost';
	$nombreDB = 'miscontactos';
	$usuarioDB = 'root';
	$contrasenyaDB = '';

	// Conecta con base de datos
	$hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
	$miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);
?>
