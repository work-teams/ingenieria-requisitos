<?php 
	session_start();

	if(isset($_SESSION['user'])){
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

	<title>Smart Money</title>
	<meta charset="utf-8">
	<?php require_once "scripts2.php"; ?>

</head>
<body>
	<!--
		navbar-dark
		bg-dark
		fixed top
		fixed-bottom
	-->
	<div class="container-fluid">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<button class= "navbar-toggler" data-target="#menu" data-toggle="collapse" type="button">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="menu">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a href="#" class="nav-link">Menu principal</a>
					</li>
					<li class="nav-item active">
						<a href="#" class="nav-link">Invertir</a>
					</li>
					<li class="nav-item active">
						<a href="#" class="nav-link">Gráficos</a>
					</li>
					<li class="nav-item active">
						<a href="#" class="nav-link">Cerrar sesión</a>
					</li>
				</ul>		
			</div>
		</nav>
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
