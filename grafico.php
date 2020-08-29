<?php 
	session_start();

	if(isset($_SESSION['user'])){
?>
<!DOCTYPE html>
<html>
<head>
	<title>Smart Money</title>
	<?php require_once "scripts2.php";?>
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
      height: 100vh;
    }
    .navegacion{
      border-bottom: 2px solid black;
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
  <div class="container mt-4">
    <div class="row">
        <h3 class="col-4"></h3>
        <h3 class="text-center col-md-4 rounded text-light mx-3 py-2 invertir bg-warning">Gráficos</h3>
        <h3 class="col-4"></h3>
      </div>
  </div>
  


  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

<?php
} else {
	header("location:index.php");
	}
?>