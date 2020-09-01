<?php 
	session_start();

	if(isset($_SESSION['user'])){
?>
<!DOCTYPE html>
<html>
<head>
	<title>Smart Money</title>
	<?php require_once "php/scripts.php";?>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/invertir.css">

</head>
<body class="fondo">
  
  <nav class="nav nav-pills navegacion flex-column bg-dark flex-sm-row">
    <a class="flex-fill text-center nav-link bg-dark m-1 p-2" href="principal.php">SmartMoney</a>
    <a class="flex-fill text-center nav-link bg-dark m-1 p-2" href="invertir.php">Invertir</a>
    <a class="flex-fill text-center nav-link bg-dark m-1 p-2" href="grafico.php">Gráficos</a>
    <a class="flex-fill text-center nav-link bg-dark m-1 p-2" href="usuario.php">Usuario</a>
    <a class="flex-fill text-center salir nav-link bg-dark m-1 p-2" href="php/salir.php">Salir</a>
  </nav>

  <div class="container mt-4">
      <div class="row">
        <h3 class="col-4"></h3>
        <h3 class="text-center col-md-4 rounded text-light mx-3 py-2 invertir bg-success">Invertir</h3>
        <h3 class="col-4"></h3>
      </div>
      <div class="row">
          <div class="col-2"></div>
          <div class="col-8">
            <div class="row">
                <div class="col-md-6 col-12 con">
                    <img src="img/bitcoin.jpg" class="rounded img-fluid imgv" alt="">
                    <a class="btn botonEnlace" href="#">BITCOIN</a>
                </div>
                <div class="col-md-6 col-12 con">
                    <img src="img/cambio.jpg" class="rounded img-fluid imgv" alt="">
                    <a class="btn botonEnlace" href="divisas.php">DIVISAS</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-12 con">
                    <img src="img/beneficio.jpg" class="rounded img-fluid imgv" alt="">
                    <a class="btn botonEnlace" href="#">BONOS</a>
                </div>
                <div class="col-md-6 col-12 con">
                    <img src="img/visualiza.jpg" class="rounded img-fluid imgv" alt="">
                    <a class="btn botonEnlace2" href="#">ACCIONES</a>
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