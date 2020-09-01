<?php 

  session_start();
  
  $myusuario = $_SESSION['user'];
  $myusuario = strtoupper($myusuario);
  if(isset($_SESSION['user']))
  {
?>
<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<title>Smart Money</title>
	<?php require_once "php/scripts.php";?>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/usuario.css">

</head>
<body class="fondo">
<div class="container-fluid">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="Principal.php" class="navbar-brand text-white">SmartMoney</a>
      <button class= "navbar-toggler" data-target="#menu" data-toggle="collapse" type="button">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="menu">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a href="invertir.php" class="nav-link">Invertir</a>
            </li>
            <li class="nav-item active">
                <a href="grafico.php" class="nav-link">Gráficos</a>
            </li>
            <li class="nav-item active">
                <a href="usuario.php" class="nav-link">Usuario</a>
              </li>
          </ul>
          <span class="navbar-text">
            <a href="php/salir.php" class="nav-link">Cerrar sesión</a>
        </span>		
      </div>
  </nav>
      <div class="row">
        <h3 class="col-4"></h3>
        <h3 class="text-center col-md-4 rounded text-light mx-3 py-2 invertir bg-primary"><?php echo $myusuario ?></h3>
        <h3 class="col-4"></h3>
      </div>
      <div class="row">
          <div class="col-2"></div>
          <div class="col-8">
            <div class="row">
                <div class="col-md-6 col-12 con">
                    <img src="img/datos.jpg" class="rounded img-fluid imgv" alt="">
                    <a class="btn botonEnlace" href="modificardatos.php">DATOS</a>
                </div>
                <div class="col-md-6 col-12 con">
                    <img src="img/historial.jpg" class="rounded img-fluid imgv" alt="">
                    <a class="btn botonEnlace" href="historial.php">HISTORIAL</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-12 con">
                    <img src="img/cupon.jpg" class="rounded img-fluid imgv" alt="">
                    <a class="btn botonEnlace" href="#">CUPÓN</a>
                </div>
                <div class="col-md-6 col-12 con">
                    <img src="img/contacto.jpg" class="rounded img-fluid imgv" alt="">
                    <a class="btn botonEnlace" href="contacto.php">CONTACTO</a>
                </div>
            </div>
          </div>
          <div class="col-2"></div>
      </div>
  </div>

</body>
</html>

<?php
} else {
	header("location:index.php");
	}
?>