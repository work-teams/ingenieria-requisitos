<?php 
	session_start();

	if(isset($_SESSION['user'])){
?>
<!DOCTYPE html>
<html>
<head>
	<title>Smart Money</title>
	<?php require_once "php/scripts2.php";?>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
  <style>
    .nav a{
      color: white;
      text-decoration-style: none;
      font-family: 'Alata', sans-serif;
      font-size: 19px;
    }
    .nav a:hover{
      transition: 1.1s;
    }
    .fondo{
      background-image: url(img/image.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      width:auto;
      height: 100%;
    }
    .navegacion{
      border-bottom: 2px solid black;
    }
    .invertir{
        border: 0.5px solid black;
    }

  </style>
</head>
<body class="fondo">
  
  <nav class="nav nav-pills navegacion flex-column bg-dark flex-sm-row">
    <a class="flex-fill text-center nav-link bg-dark m-1 p-2" href="principal.php">SmartMoney</a>
    <a class="flex-fill text-center nav-link bg-dark m-1 p-2" href="invertir.php">Invertir</a>
    <a class="flex-fill text-center nav-link bg-dark m-1 p-2" href="grafico.php">Gráficos</a>
    <a class="flex-fill text-center nav-link bg-dark m-1 p-2" href="usuario.php">Usuario</a>
    <a class="flex-fill text-center salir nav-link bg-dark m-1 p-2" href="php/salir.php">Salir</a>
  </nav>

  <div class="container">
    <div class="row">
        <div class="panel panel-body bg-light p-3 rounded my-4">
			<form id="frmRegistro">
				<div class="form-row justify-content-between ">
				
					<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
						<label for="">Nombres</label>
						<input type="text" id="nombres" class="form-control" placeholder="Nombres">
					</div>

					<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
						<label for="">Primer Apellido</label>
						<input type="text" id="primerApellido" class="form-control" placeholder="Primer Apellido">
					</div>

					<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
						<label for="">Segundo Apellido</label>
							<input type="text" id="segundoApellido" class="form-control" placeholder="Segundo Apellido">
					</div>

					<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
						<label for="">Numero DNI</label>
						<input type="text" id="dni" class="form-control" placeholder="DNI">
					</div>

					<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
						<label for="">Teléfono</label>
						<input type="text" id="telefono" class="form-control" placeholder="Teléfono">
					</div>

					<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
						<label for="">Fecha Nacimiento</label>
						<input class="form-control" id="fechaNac" type="date" min="1900-01-01" max="2002-08-29" value="" id="example-date-input" required>
					</div>

					<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
						<label for="">Usuario</label>
						<input type="text" id="usuario" class="form-control" placeholder="Usuario">
					</div>

					<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
						<label for="">Correo Electrónico</label>
						<input type="email" id="correo" class="form-control" placeholder="Correo electrónico">
					</div>

					<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
						<label for="">Contraseña</label>
						<input type="password" id="password" class="form-control" placeholder="Contraseña">
					</div>


				</div>

				<div class="form-row justify-content-around botones my-3">
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3">
						<a href="index.php" class="btn btn-success d-block">Ingresar</a>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3">
						<span class="btn btn-primary d-block" id="registrarNuevo">Registrar</span>
					</div>
				</div>

			</form>
		</div>
    </div>
  </div>




 <!--|
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  |-->
  
</body>
</html>

<?php
} else {
	header("location:index.php");
	}
?>