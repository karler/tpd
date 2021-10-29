<?PHP
	include('bd.php');

	//Recepcionar datos
	$idcontacto = $_POST['idcontacto'];
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$dni = $_POST['dni'];
	$email = $_POST['email'];
	$celular = $_POST['celular'];

	$miConsulta = $miPDO->prepare('UPDATE contactos SET nombre = :nom, apellidos = :ape, dni = :dni, email = :email, celular = :cel WHERE idcontacto = :id');
	$miConsulta->execute(
		[
			':nom' => $nombre,
			':ape' => $apellidos,
			':dni' => $dni,
			':email' => $email,
			':cel' => $celular,
			':id' => $idcontacto
		]
	);
	header('Location: listar.php');
?>