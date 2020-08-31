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
		.navegacion{
      		border-bottom: 2px solid black;
		}
		.fondo{
			background-image: url(img/image.jpg);
			background-repeat: no-repeat;
			background-size: cover;
			width:auto;
			height: 100vh;
		}
		.tabla{
			overflow:scroll;
     		height:450px;
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

<div class="container bg-light p-3 border mt-3 rounded">
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


<script  type="text/javascript">
		
		function convertir() {
			
			//Obtiene valor en el input de cantidad
			var valor=parseFloat(document.getElementById("cantidad").value);

			//Si no hay nada en el input de cantidad
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

				//Coloca el valor del dolar y euro en los inputs
				document.getElementById("dolar").value = dolar;
				document.getElementById("euro").value = euro;

				
				//NN
				var resultado=0;
				var costo="";

				//soles a dolares
				if(de==1&&a==2){
					resultado=valor/dolar;
					//Imprime --> resultado: $28.44
					document.getElementById("resultado").innerHTML="Resultado: $"+resultado.toFixed(2);

					//Muestra "el valor del dolar ES 424"
					costo="El valor del dolar es: S/"+dolar;
					document.getElementById("costo").innerHTML=costo;

					//VALOR EN EL INPUT PARA ENVIAR, CON NAME RESULTADO 2
					document.getElementById("resultado2").value = "$ " + resultado.toFixed(2);

					document.getElementById("descuento").value = "S/ " + extrae;

					//Habilita desabilita bboton
					document.getElementById("registrarCompra").disabled = false;

				}

				//soles a euro
				else if(de==1&&a==3){
					resultado=valor/euro;

					//Imprime --> resultado: $28.44
					document.getElementById("resultado").innerHTML="Resultado: €"+resultado.toFixed(2);

					//Muestra "el valor del euro ES 424"
					costo="El valor del euro es: S/"+euro;
					document.getElementById("costo").innerHTML=costo;

					//VALOR EN EL INPUT PARA ENVIAR, CON NAME RESULTADO 2
					document.getElementById("resultado2").value = "€ " + resultado.toFixed(2);

					document.getElementById("descuento").value = "S/ " + extrae;

					//Habilita desabilita bboton
					document.getElementById("registrarCompra").disabled = false;

				}
				//dolar a soles
				else if(de==2&&a==1){
					resultado=valor*dolar;

					//Imprime --> resultado: $28.44
					document.getElementById("resultado").innerHTML="Resultado: S/"+resultado.toFixed(2);

					//Muestra "el valor del euro ES 424"
					costo="El valor del dolar es: S/"+dolar;
					document.getElementById("costo").innerHTML=costo;

					//VALOR EN EL INPUT PARA ENVIAR, CON NAME RESULTADO 2
					document.getElementById("resultado2").value = "S/ " + resultado.toFixed(2);

					document.getElementById("descuento").value = "$ " + extrae;

					//Habilita desabilita bboton
					document.getElementById("registrarCompra").disabled = false;

				}

				//dolar a euro
				else if(de==2&&a==3){
					resultado=valor*(dolar/euro);

					//Imprime --> resultado: $28.44
					document.getElementById("resultado").innerHTML="Resultado: €"+resultado.toFixed(2);

					//Muestra "el valor del euro ES 424"
					costo="El valor del euro es: S/"+euro;
					document.getElementById("costo").innerHTML=costo;

					//VALOR EN EL INPUT PARA ENVIAR, CON NAME RESULTADO 2
					document.getElementById("resultado2").value = "€ " + resultado.toFixed(2);

					document.getElementById("descuento").value = "$ " + extrae;

					//Habilita desabilita bboton
					document.getElementById("registrarCompra").disabled = false;

					
				}
				//euro a soles
				else if(de==3&&a==1){
					resultado=valor*euro;

					//Imprime --> resultado: $28.44
					document.getElementById("resultado").innerHTML="Resultado: S/"+resultado.toFixed(2);

					//Muestra "el valor del euro ES 424"
					costo="El valor del euro es: S/"+euro;
					document.getElementById("costo").innerHTML=costo;

					//VALOR EN EL INPUT PARA ENVIAR, CON NAME RESULTADO 2
					document.getElementById("resultado2").value = "S/ " + resultado.toFixed(2);

					document.getElementById("descuento").value = "€ " + extrae;

					//Habilita desabilita bboton
					document.getElementById("registrarCompra").disabled = false;
				}

				//euro a dolar
				else if(de==3&&a==2){
					resultado=valor*(euro/dolar);

					//Imprime --> resultado: $28.44
					document.getElementById("resultado").innerHTML="Resultado: $"+resultado.toFixed(2);

					//Muestra "el valor del euro ES 424"
					costo="El valor del dolar es: S/"+dolar;
					document.getElementById("costo").innerHTML=costo;

					//VALOR EN EL INPUT PARA ENVIAR, CON NAME RESULTADO 2
					document.getElementById("resultado2").value = "$ " + resultado.toFixed(2);

					document.getElementById("descuento").value = "€ " + extrae;

					//Habilita desabilita bboton
					document.getElementById("registrarCompra").disabled = false;
				}


				//Select iguales
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


	<!--
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	-->


  </body>
</html>

<?php
} else {
	header("location:index.php");
	}
?>

