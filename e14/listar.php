<?php include('bd.php'); ?>
	<?PHP
		// Prepara SELECT
		$miConsulta = $miPDO->prepare('SELECT * FROM contactos;');

		// Ejecuta consulta
		$miConsulta->execute();
	?>
<?php include('header.php'); ?>
	<a href="nuevo.php" class="btn btn-success">Agregar</a><br>
	<h1>Lista de Contactos</h1>
	<table class="table table-striped table-sm">
		<tr>
			<th>Id Contacto</th>
			<th>Nombre</th>
			<th>Apellidos</th>
			<th>DNI</th>
			<th>Email</th>
			<th>Celular</th>
			<th>Editar</th>
			<th>Eliminar</th>
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
					$ruta1 = "http://localhost/tpd/e14/editar.php?idcontacto={$valor['idcontacto']}";
					echo "<td><a href='$ruta1' class= 'btn btn-primary'>Editar</a></td>";
					$ruta2 = "http://localhost/tpd/e14/eliminar.php?idcontacto={$valor['idcontacto']}";
					echo "<td><a href='$ruta2' class= 'btn btn-danger'>Eliminar</a></td>";
					echo "</tr>";
				}
			
			?>
	</table>
	
<?php include('footer.php'); ?>