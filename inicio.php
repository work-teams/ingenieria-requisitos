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
			<a class="nav-link m-2" href="#!">Menu principal</a>
		</li>
		<li class="nav-item">
			<a class="nav-link m-2" href="#!">Invertir</a>
		</li>
		<li class="nav-item">
			<a class="nav-link m-2" href="#!">Gráficos</a>
		</li>
		<li class="nav-item">
			<a class="nav-link m-2" href="#!">Historial</a>
		</li>
		<li class="nav-item m-2">
			<a href="php/salir.php" class="nav-link">Cerrar sesión</a>
		</li>
	</ul>
</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				
				<div class="jumbotron">
				<a href="php/salir.php" class="btn btn-info">Salir del sistema</a>
					<h2>Entraste con exito</h2>
				</div>
			</div>
		</div>
	</div>

</body>
</html>

<?php
} else {
	header("location:index2.php");
	}
?>
