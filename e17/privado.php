<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
<main class="form-signin">

<?PHP
	session_start();
	if (isset($_SESSION['email'])){
		echo "Bienvenido a la página privada";
		
		echo "<br><br><a href='cerrarsesion.php'>Cerrar sesión</a>";
	}else{
		echo " ¡Te encuentras en una zona secreta!, solo visible por una persona identificada.";
		
		echo "<br><br><a href='login.php'>Login</a>";
	}
?>

</main>
  </body>
</html>