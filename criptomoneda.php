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
	<?php require_once "php/scripts.php";?>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/grafico2.css">
  
</head>
<body class="fondo" onload="cargar()" >
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
        <div>
          <h2 class="text-center rounded text-light mt-3 py-2 bg-success">COMPRA Y VENTA DE CRIPTOMONEDAS</h2>
        </div>

      <div class="row text-center">
        <div class="col-lg-2 col-md-4 col-sm-6 py-2 px-1">
          <div class="card">
          <h3 class="card-title-text">BITCOIN</h3>
          <img class="card-img-top" src="divisas/bitcoin.jpg" alt="bitcoin" style="width:100%">
          <div class="row">
            <div class="card-body">
              <div class="">
                <button type="input" class="btn btn-success btn-block my-1">
                  <div aclass="trade-button-title" >COMPRAR: <span id ="ComprarBitcoin">0</span></div>
                </button>
              </div>
              <div class="">
                <button button type="input" class="btn btn-primary btn-block my-1">
                  <div aclass="trade-button-title">VENDER: <span id ="VenderBitcoin">0</span></div>
                </button>
              </div>
            </div>
          </div>
        </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 py-2 px-1">
          <div class="card">
          <h3 class="card-title-text">ETHERUM</h3>
          <img class="card-img-top" src="divisas/etherum.jpg" alt="etherum" style="width:100%">
          <div class="row">
            <div class="card-body">
              <button type="input" class="btn btn-success btn-block my-1">
              <div aclass="trade-button-title" >COMPRAR: <span id ="ComprarEtherum">0</span></div>
            </button>
            <button type="input" class="btn btn-primary btn-block my-1">
              <div aclass="trade-button-title">VENDER: <span id ="VenderEtherum">0</span></div>
            </button>
          </div>
          </div>
        </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 py-2 px-1">
          <div class="card">
          <h2 class="card-title-text">RIPPLE</h2>
          <img class="card-img-top" src="divisas/ripple.jpg" alt="ripple" style="width:100%">
          <div class="row">
          <div class="card-body">
            <button type="input" class="btn btn-success btn-block my-1">
              <div aclass="trade-button-title">COMPRAR: <span id ="ComprarRipple">0</span></div>
            </button>
            <button type="input" class="btn btn-primary btn-block my-1">
              <div aclass="trade-button-title" >VENDER: <span id ="VenderRipple">0</span></div>
            </button>
          </div>
          </div>
        </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 py-2 px-1">
          <div class="card">
          <h2 class="card-title-text">DASH</h2>
          <img class="card-img-top" src="divisas/dash.jpg" alt="dash" style="width:100%">
          <div class="row">
            <div class="card-body">
            <button type="input" class="btn btn-success btn-block my-1">
              <div aclass="trade-button-title" >COMPRAR: <span id ="ComprarDash">0</span></div>
            </button>
            <button type="input" class="btn btn-primary btn-block my-1">
              <div aclass="trade-button-title" >VENDER: <span id ="VenderDash">0</span></div>
            </button>
          </div>
          </div>
        </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 py-2 px-1">
          <div class="card">
          <h2 class="card-title-text">LITECOIN</h2>
          <img class="card-img-top" src="divisas/litecoin.jpg" alt="litecoin" style="width:100%">
          <div class="row">
            <div class="card-body">
            <button type="input" class="btn btn-success btn-block my-1">
              <div aclass="trade-button-title" >COMPRAR: <span id ="ComprarLitecoin">0</span></div>
            </button>
            <button type="input" class="btn btn-primary btn-block my-1">
              <div aclass="trade-button-title" >VENDER: <span id ="VenderLitecoin">0</span></div>
            </button>
          </div>
          </div>
        </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 py-2 px-1">
          <div class="card">
          <h2 class="card-title-text">TRON</h2>
          <img class="card-img-top" src="divisas/tron.jpg" alt="tron" style="width:100%">
          <div class="row">
            <div class="card-body">
            <button type="input" class="btn btn-success btn-block my-1">
              <div aclass="trade-button-title" >COMPRAR: <span id ="ComprarTron">0</span></div>
            </button>
            <button type="input" class="btn btn-primary btn-block my-1">
              <div aclass="trade-button-title" >VENDER: <span id ="VenderTron">0</span></div>
            </button>
          </div>
          </div>
        </div>
        </div>
      </div>
    
  </div>


  <script>
  function cargar(){
    bitcoinComprar = 0;
    bitcoinVender = 0;
    etherumComprar = 0;
    etherumVender = 0;
    rippleComprar = 0;
    rippleVender = 0;
    dashComprar = 0;
    dashVender = 0;
    litecoinComprar = 0;
    litecoinVender = 0;
    tronComprar = 0;
    tronVender = 0;
    var aleatorio = Math.random()*100;
    bitcoin1 = document.getElementById("ComprarBitcoin");
    bitcoin2 = document.getElementById("VenderBitcoin");
    etherum1 = document.getElementById("ComprarEtherum");
    etherum2 = document.getElementById("VenderEtherum");
    ripple1 = document.getElementById("ComprarRipple");
    ripple2 = document.getElementById("VenderRipple");
    dash1 = document.getElementById("ComprarDash");
    dash2 = document.getElementById("VenderDash");
    litecoin1 = document.getElementById("ComprarLitecoin");
    litecoin2 = document.getElementById("VenderLitecoin");
    tron1 = document.getElementById("ComprarTron");
    tron2 = document.getElementById("VenderTron");
    window.setInterval(
      function(){
        if(tronComprar>=0){
          tronComprar = 45.15+aleatorio;
          aleatorio++;
        }
        if(tronVender>=0){
          tronVender = 45.15+aleatorio;
          aleatorio++;
        }
        if(bitcoinComprar>=0){
          bitcoinComprar = 45.15+aleatorio;
          aleatorio++;
        }
        if(bitcoinVender>=0){
          bitcoinVender = 45.15+aleatorio;
          aleatorio++;
        }
        if(etherumComprar>=0){
          etherumComprar = 45.15+aleatorio;
          aleatorio++;
        }
        if(etherumVender>=0){
          etherumVender = 45.15+aleatorio;
          aleatorio++;
        }
        if(rippleComprar>=0){
          rippleComprar = 45.15+aleatorio;
          aleatorio++;
        }
        if(rippleVender>=0){
          rippleVender = 45.15+aleatorio;
          aleatorio++;
        }
        if(dashComprar>=0){
          dashComprar = 45.15+aleatorio;
          aleatorio++;
        }
        if(dashVender>=0){
          dashVender = 45.15+aleatorio;
          aleatorio++;
        }
        if(litecoinComprar>=0){
          litecoinComprar = 45.15+aleatorio;
          aleatorio++;
        }
        if(litecoinVender>=0){
          litecoinVender = 45.15+aleatorio;
          aleatorio++;
        }
        tron1.innerHTML=tronComprar.toFixed(2);
        tron2.innerHTML=tronVender.toFixed(2);
        bitcoin1.innerHTML=bitcoinComprar.toFixed(2);
        bitcoin2.innerHTML=bitcoinVender.toFixed(2);
        etherum1.innerHTML=etherumComprar.toFixed(2);
        etherum2.innerHTML=etherumVender.toFixed(2);
        ripple1.innerHTML=rippleComprar.toFixed(2);
        ripple2.innerHTML=rippleVender.toFixed(2);
        dash1.innerHTML=dashComprar.toFixed(2);
        dash2.innerHTML=dashVender.toFixed(2);
        litecoin1.innerHTML=litecoinComprar.toFixed(2);
        litecoin2.innerHTML=litecoinVender.toFixed(2);
      }
      ,3000);
  } 
</script>

</body>
</html>

<?php
} else {
	header("location:index.php");
	}
?>