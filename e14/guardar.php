<?PHP
	$nombre = $_REQUEST['nombre'];
	$apellidos = $_REQUEST['apellidos'];
	$dni = $_REQUEST['dni'];
	$email = $_REQUEST['email'];
	$celular = $_REQUEST['celular'];

	//Conectarnos a la BD
	include('bd.php');

	// Prepara INSERT
	$miInsert = $miPDO->prepare('INSERT INTO contactos (nombre, apellidos, dni, email, celular) VALUES (:nombre, :apellidos, :dni, :email, :celular)');
	
	//Ejecuta la consulta
	$miInsert->execute(
		array(
			'nombre'=> $nombre,
			'apellidos'=> $apellidos,
			'dni'=> $dni,
			'email'=> $email,
			'celular'=> $celular
		)
	);
	//Redireciona a Listar
	header('Location: listar.php');
?>