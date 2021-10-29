<?PHP
	include('bd.php');
	$idcontacto = $_GET['idcontacto'];
	$miConsulta = $miPDO->prepare('DELETE FROM contactos WHERE idcontacto = :id');
	$miConsulta->execute(
		[
			':id' => $idcontacto
		]
	);
	header('Location: listar.php');
?>