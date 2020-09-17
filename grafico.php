<?php 
	session_start();

	if(isset($_SESSION['user'])){
?>
<!DOCTYPE html>
<html>
<head>

  <title>Smart Money</title>

	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
	<?php require_once "php/scripts.php";?>
  <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/grafico.css">
  
</head>
<body class="fondo">
<nav class="navbar pb-1 pt-1 navbar-expand-lg navbar-dark bg-dark mb-2 text-center">
    <a href="Principal.php" class="navbar-brand text-white text-center mr-3 px-3">SmartMoney</a>
    <button class= "navbar-toggler" data-target="#menu" data-toggle="collapse" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav mr-auto">
      	<li class="nav-item active mx-5 px-3">
      		<a href="invertir.php" class="nav-link" style="font-size:18px;">Invertir</a>
        </li>
        <li class="nav-item active mx-5 px-3">
      		<a href="grafico.php" class="nav-link " style="font-size:18px;">Gráficos</a>
      	</li>
      	<li class="nav-item active" style="">
      		<a href="usuario.php" class="nav-link mx-5 px-3" style="font-size:18px;">Usuario</a>
      	</li>
      </ul>
      <div class="text-center">
        <li class="navbar-text">
          <a href="php/salir.php" style="font-size:18px;" class="nav-link">Cerrar sesión</a>
        </li>	
      </div>	
    </div>
</nav>
<div class="container-fluid">

  <div class="row">

    <div class="col-xl-3" id="laterales">
      <img src="img/lateralGrafico.jpg" class="img-fluid rounded" style="height:85vh" alt="">
    </div>

    <div class="col-xl-6">
      <h3 class="bg-primary text-center text-light">Setiembre: Dólar vs Euro</h3>
      <div id="grafica">
      </div>
    </div>

    <div class="col-xl-3" id="laterales">
      <img src="img/smartmoneyinfo.png" class="img-fluid rounded" style="height:85vh" alt="">
    </div>
  </div>
    
</div>
  <script type="text/javascript">
        var trace1 = {
          y: [3.54,3.53,3.54,3.55,3.55,3.55,3.55,3.53,3.54,3.54,3.55,3.57,3.57,3.57, 3.56, 3.5, 3.53],
          x: [01,02,03,04,05,06,07,08,09,10,11,12,13,14,15,16],
          type: 'scatter',
          name: 'Dolar',
          line: {
            color: 'green',
            width: 2
          }
        };

        var trace2 = {
          y: [4.25,4.18,4.21,4.21,4.21,4.21,4.17,4.17,4.17,4.16,4.19,4.20,4.20,4.24,4.24,4.21],
          x: [01,02,03,04,05,06,07,08,09,10,11,12,13,14,15,16],
          type: 'scatter',
          name: 'Euro',
          line: {
            color: 'black',
            width: 2
          }
        };
        var layout = {
          title:'Presione "Euro" o "Dólar" para ocultar o mostrar valores',
          xaxis: {
            title: 'Día de Setiembre'
          },
          yaxis: {
            title: 'Precio en Soles'
          }
        };

        var data = [trace2,trace1];

        Plotly.newPlot('grafica', data,layout);

  </script>
  
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

<?php
} else {
	header("location:index.php");
	}
?>