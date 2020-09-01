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
	<link rel="stylesheet" href="css/divisas.css">

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
	  
		<div class="bg-light p-3 border mt-3 rounded">
			<div class="row mb-4">
				<div class="col-md-12 col-lg-5 col-12">
					<h2 class="ml-4">Conversor de Divisas</h2>
					<form id="frmajax" method="POST" id="">
						<div class="form-group col-md-8 ml-3">
							<label for="cantidad">Cantidad</label>
							<input type="number" class="form-control" id="cantidad" name="cantidad" onchange="convertir()" min="1" required>
						</div>
						<div class="dropdown col-md-8 ml-3 mb-2">
							<label for="Convertird">Calcular de:</label>
						<div>
							<select class="btn btn-primary dropdown-toggle ml-1 px-4" data-toggle="dropdown" id="de" onchange="convertir()">
								<option value="1">Soles</option>
								<option value="2">Dolares</option>
								<option value="3">Euros</option>
							</select>
						</div>
				</div>
				<div class="dropdown col-md-8 ml-3 mb-2">
					<label for="Convertira">Calcular a:</label>
						<div>
							<select class="btn btn-primary dropdown-toggle ml-1 px-4" data-toggle="dropdown" id="a" onchange="convertir()">
								<option value="1">Soles</option>
								<option value="2">Dolares</option>
								<option value="3">Euros</option>
							</select>
						</div>
					</div>

					<label class="font-weight-bolder mt-1 mb-3 ml-3 col-md-4 mb-1" id="resultado">Resultado: 0.00</label>
					<label class="font-weight-bolder mb-3 col-md-8 ml-3 mb-1" id="costo"></label>

					<div class="auto" id="auto" style="display:none">
						<input class="ml-3" id="dolar" name="dolar"></input>
						<input class="ml-3" id="euro" name="euro"></input>
						<input class="ml-3" id="descuento" name="descuento"></input>
						<input class="ml-3" name="resultado2" id="resultado2"></input>
					</div>

					<div>
						<button class="btn ml-4 btn-success" id="registrarCompra">Comprar</button>
						<a href="invertir.php" class="btn btn-danger">Cancelar</a>
					</div>

					</form>

			</div>

			<div class="d-none d-lg-block col-md-6 mt-4 col-lg-7">
				<img src="img/divisasok.jpg" class="img-fluid rounded" alt="fondo">
			</div>
		</div>
	</div>
	
</div>


<script  type="text/javascript">
		
		function convertir() {
			
			var valor=parseFloat(document.getElementById("cantidad").value);

			if(isNaN(valor)){
				
				alertify.error("Agrega una cantidad por favor.");
				document.getElementById("resultado").innerHTML="Resultado: 0.00";
				document.getElementById("costo").innerHTML="";
				return false;
				
			}else{
				var de=document.getElementById("de").value;
				var a=document.getElementById("a").value;
				var aleatorio = Math.random();
				var aleatorio2 = Math.round(aleatorio*100)/100;
				var dolar = (3+aleatorio2).toFixed(2);
				var euro = (4+aleatorio2).toFixed(2);
				var extrae = document.getElementById("cantidad").value;
				var resultado=0;
				var costo="";

				document.getElementById("dolar").value = dolar;
				document.getElementById("euro").value = euro;
			
				if(de==1&&a==2){
					resultado=valor/dolar;
					document.getElementById("resultado").innerHTML="Resultado: $"+resultado.toFixed(2);
					costo="El valor del dolar es: S/"+dolar;
					document.getElementById("costo").innerHTML=costo;
					document.getElementById("resultado2").value = "$ " + resultado.toFixed(2);
					document.getElementById("descuento").value = "S/ " + extrae;
					document.getElementById("registrarCompra").disabled = false;
				}
				else if(de==1&&a==3){
					resultado=valor/euro;
					document.getElementById("resultado").innerHTML="Resultado: €"+resultado.toFixed(2);
					costo="El valor del euro es: S/"+euro;
					document.getElementById("costo").innerHTML=costo;
					document.getElementById("resultado2").value = "€ " + resultado.toFixed(2);
					document.getElementById("descuento").value = "S/ " + extrae;
					document.getElementById("registrarCompra").disabled = false;
				}
				else if(de==2&&a==1){
					resultado=valor*dolar;
					document.getElementById("resultado").innerHTML="Resultado: S/"+resultado.toFixed(2);
					costo="El valor del dolar es: S/"+dolar;
					document.getElementById("costo").innerHTML=costo;
					document.getElementById("resultado2").value = "S/ " + resultado.toFixed(2);
					document.getElementById("descuento").value = "$ " + extrae;
					document.getElementById("registrarCompra").disabled = false;
				}
				else if(de==2&&a==3){
					resultado=valor*(dolar/euro);
					document.getElementById("resultado").innerHTML="Resultado: €"+resultado.toFixed(2);
					costo="El valor del euro es: S/"+euro;
					document.getElementById("costo").innerHTML=costo;
					document.getElementById("resultado2").value = "€ " + resultado.toFixed(2);
					document.getElementById("descuento").value = "$ " + extrae;
					document.getElementById("registrarCompra").disabled = false;					
				}
				else if(de==3&&a==1){
					resultado=valor*euro;
					document.getElementById("resultado").innerHTML="Resultado: S/"+resultado.toFixed(2);
					costo="El valor del euro es: S/"+euro;
					document.getElementById("costo").innerHTML=costo;
					document.getElementById("resultado2").value = "S/ " + resultado.toFixed(2);
					document.getElementById("descuento").value = "€ " + extrae;
					document.getElementById("registrarCompra").disabled = false;
				}
				else if(de==3&&a==2){
					resultado=valor*(euro/dolar);
					document.getElementById("resultado").innerHTML="Resultado: $"+resultado.toFixed(2);
					costo="El valor del dolar es: S/"+dolar;
					document.getElementById("costo").innerHTML=costo;
					document.getElementById("resultado2").value = "$ " + resultado.toFixed(2);
					document.getElementById("descuento").value = "€ " + extrae;
					document.getElementById("registrarCompra").disabled = false;
				}
				else if(de==1 && a==1 || de==2 && a==2 || de==2 && a==2 ){
					var resultado = document.getElementById("cantidad").value;
					document.getElementById("resultado").innerHTML="Resultado: " + resultado;
					document.getElementById("costo").innerHTML="";
					document.getElementById("registrarCompra").disabled = true;
				};
			};
		};

		$(document).ready(function(){
			$("#registrarCompra").click(function(){

				if($('#cantidad').val()==""){
				alertify.alert("Agregue una cantidad");
					return false;
				}

				cadena="descuento=" + $('#descuento').val() +
					"&dolar=" + $('#dolar').val() +
					"&euro=" + $('#euro').val() +
					"&resultado2=" + $('#resultado2').val();

				pago = $('#descuento').val();
				valorcomprado = $('#resultado2').val();			

				$.ajax({
					type:"POST",
					url:"php/insertar.php",
					data:cadena,
					success:function(r){
						if(r==1){
							$('#frmajax')[0].reset();
							$('#resultado').text("Resultado: 0.00");
							$('#costo').text("");
							alertify.alert("Compra hecha con éxito.<br>" + "Monto pagado: " + pago + "<br>Monto comprado: " + valorcomprado);
						}else{
							alertify.alert("Algo falló.");
						}
					}
				});

				return false;
			});
		});

	</script>

  </body>
</html>

<?php
} else {
	header("location:index.php");
	}
?>

