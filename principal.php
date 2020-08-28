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
	<?php require_once "scripts2.php";?>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
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
    .carr{
      font-family: 'Alata', sans-serif;
      font-size: 35px;
      -webkit-text-stroke: 0.5px black;
      color: transparent;
      font-weight: bold;
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

    .titulo{
      padding: 15px;
      text-align: center;
    }

    #peque{
      font-size: 20px;
    }

    .volverini:hover{
      color:white;
    }
    img {
        width: 700px;
        margin: 20px auto;
        display: block;
        border: 3px solid black;
        background-color: #948f8f;
    }
    .dir{
        font-size: 40px;
        color:white;
    }
    footer {
      position: absolute;
      bottom: 0px; 
      height: 40px;
      border: 1px solid #000;
      background: #0d0c0c;
      text-align: center;
      color: #fff;
      width: 100%;
      padding: 6px;
    }
    .define{
      background-color: black;
    }
  </style>
</head>
<body class="fondo">
  
  <nav class="nav nav-pills navegacion flex-column bg-dark flex-sm-row">
    <a class="flex-fill text-center nav-link bg-dark m-1 p-2" href="#">SmartMoney</a>
    <a class="flex-fill text-center nav-link bg-dark m-1 p-2" href="invertir.php">Invertir</a>
    <a class="flex-fill text-center nav-link bg-dark m-1 p-2" href="#">Gráficos</a>
    <a class="flex-fill text-center nav-link bg-dark m-1 p-2" href="#">Usuario</a>
    <a class="flex-fill text-center salir nav-link bg-dark m-1 p-2" href="php/salir.php">Salir</a>

  </nav>

  <div class="">
    <section class="seccion">
        <article>
            <hgroup class="titulo">
                <h1 class="text-light">Smart Money</h1>
                <h2 id="peque" class="text-light">Curso: Ingeniería de requisitos</h2>
                <img src="img/fisi.png"/>
                <a class="dir" href="https://sistemas.unmsm.edu.pe/">Ir a FISI</a>
            </hgroup>
        </article>
        <footer>
            <div class="define">
                <p>Derechos reservados 2020</p>
            </div>
    </footer>
    </section>
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

