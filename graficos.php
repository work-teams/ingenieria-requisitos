<?php 
	session_start();

	if(isset($_SESSION['user'])){
?>
<!DOCTYPE html>
<html>
<head>
	<title>Smart Money</title>
	<?php require_once "scripts2.php"; ?>

</head>
<body>
<nav>
	<ul class="nav md-tabs nav-justified bg-dark lighten-2">
		<li class="nav-item">
			<a class="nav-link m-2" href="principal.php">Menu principal</a>
		</li>
		<li class="nav-item">
			<a class="nav-link m-2" href="divisas.php">Invertir</a>
		</li>
		<li class="nav-item">
			<a class="nav-link m-2" href="graficos.php">Gráficos</a>
		</li>
		<li class="nav-item">
			<a class="nav-link m-2" href="historial.php">Historial</a>
		</li>
		<li class="nav-item m-2">
			<a href="php/salir.php" class="nav-link m-2">Cerrar sesión</a>
		</li>
	</ul>
</nav>

</html>

<?php
} else {
	header("location:index.php");
	}
?>

