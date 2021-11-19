<?PHP
// La contraseña es '123'
// echo password_hash('123', PASSWORD_BCRYPT);
// $2y$10$OuIiaiZMrVb5nAzrBU4U8eBjCB/rMPEAnNlmM8krh0nZ5Fru/nO7q

//Lectura de la Base de Datos
$email = "joseluispz@lasalleurubamba.edu.pe";
$contraseña = '$2y$10$OuIiaiZMrVb5nAzrBU4U8eBjCB/rMPEAnNlmM8krh0nZ5Fru/nO7q';

$emailformulario = $_REQUEST['email'];
$contrasenaformulario = $_REQUEST['contrasena'];




if (password_verify($contrasenaformulario, $contraseña)){
	//Código si es la contraseña correcta
	if ($emailformulario == $email){
		//Código si es correcta la contraseña y el email
		
		session_start();
		$_SESSION['email'] = $emailformulario;
		header('Location: privado.php');
		die();
	}
}else{
	//Código si la contraseña es incorrecta
	echo "Contraseña erronea";
	//header('Location: login.php');
}

?>