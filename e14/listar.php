<?php include('bd.php'); ?>
	<?PHP
		// Prepara SELECT
		$miConsulta = $miPDO->prepare('SELECT * FROM contactos;');

		// Ejecuta consulta
		$miConsulta->execute();
	?>
<?php include('header.php'); ?>

	<h1>Lista de Contactos</h1>
	<table class="table table-striped table-sm">
		<tr>
			<th>Id Contacto</th>
			<th>Nombre</th>
			<th>Apellidos</th>
			<th>DNI</th>
			<th>Email</th>
			<th>Celular</th>
		</tr>
		
			<?PHP
				foreach ($miConsulta as $clave => $valor){
					echo "<tr>";
					echo "<td>{$valor['idcontacto']}</td>";
					echo "<td>{$valor['nombre']}</td>";
					echo "<td>{$valor['apellidos']}</td>";
					echo "<td>{$valor['dni']}</td>";
					echo "<td>{$valor['email']}</td>";
					echo "<td>{$valor['celular']}</td>";
					echo "</tr>";
				}
			
			?>
	</table>
	
<?php include('footer.php'); ?>