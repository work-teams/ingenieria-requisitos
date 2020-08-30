<?php 

  session_start();
  
  if(isset($_SESSION['user']))
  {
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
      height: 100%;
    }
    .navegacion{
      border-bottom: 2px solid black;
    }
    .imgv{
        margin: 5px;
        padding: 2px;
        border: 0.5px solid white;
    }
    .invertir{
        border: 0.5px solid black;
    }
    .con{
        position: relative;
        display: inline-block;
        text-align: center;
    }
    .botonEnlace{
        position: absolute;
        bottom: 5%;
        left: 27%;
        transform: translate(-50%, -50%);
        background-color: #01541c;
        color: white;
        font-family: 'Alata', sans-serif;
        border: 0.5px solid black;
    }

    .botonEnlace:hover{
        color: white;
        background-color: #14a342;
    }
    .chref{
        text-decoration
    }
    .invertir{
        border: 0.5px solid black;
    }
    .informacionc{
      font-family: 'Alata', sans-serif;
    }
    .btnw{
      width: 65%;
      height: 75%;
    }
    .infot{
      font-size:20px;
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
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <h3 class="text-center rounded text-light py-2 invertir bg-warning">Contáctanos</h3>
          </div>
          <div class="col-md-4"></div>
        </div>
      </div>

      <div class="container-fluid mt-2">
        <div class="row">
          <div class="col-12 text-center text-light col-md-12">
            <h2 class="informacionc">Si tienes dudas con tu experiencia en Smart Money tienes a tu disposición los siguientes canales para enviarnos tus consultas.</h2>
        </div>
      </div></div>

      <div class="container mt-4">
        <div class="row">
          <div class="col"></div>
          <div class="col-md-4 text-center">
            <a href="https://wa.me/51979204403" target="_blank"><img src="img/whatsappimg.png" class="btnw img-fluid" alt="whatsapp" srcset=""></a>
            <p class="text-light infot m-2 informacionc">Llámanos o contáctanos al Whatsapp.</p>
          </div>
          <div class="col-md-4 text-center">
            <a href="https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&flowEntry=ServiceLogin" target="_blank"><img src="img/gmailok.png" class="btnw img-fluid" alt="gmail" srcset=""></a>
            <p class="text-light m-2 infot informacionc">Envíanos un correo al Gmail.</p>
          </div>
          <div class="col"></div>
        </div>
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