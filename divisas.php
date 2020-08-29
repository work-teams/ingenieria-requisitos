<?php 
	session_start();
	//require_once "php/conexion.php";
	$inc = include("dbdbd.php");
	if(isset($_SESSION['user'])){
?>
<!DOCTYPE html>
<html>
<head>
	<title>Smart Money</title>
	<?php require_once "scripts2.php"; ?>
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
	<div class="row">
		<div class="col-md-6">
			<h2 class="ml-4">Conversor de Divisas</h2>
			<form action="php/transaccion.php" method="POST" id="">
				<div class="form-group col-md-8 ml-3">
				<label for="cantidad">Cantidad</label>
				<input type="number" class="form-control" id="Cantidad" id="valor" name="cantidad" onchange="convertir()" required>
				</div>
				<div class="dropdown  col-md-8 ml-3">
					<label for="Convertird">Calcular de:</label>
					<select class="btn btn-primary dropdown-toggle ml-1" data-toggle="dropdown" id="de" onchange="convertir()">
						<option value="1">Soles</option>
						<option value="2">Dolares</option>
						<option value="3">Euros</option>
					</select><br><br>
				</div>
				<div class="dropdown col-md-8 ml-3">
					<label for="Convertira">Calcular a:</label>
					<select class="btn btn-primary dropdown-toggle ml-1" data-toggle="dropdown" id="a" onchange="convertir()">
						<option value="1">Soles</option>
						<option value="2">Dolares</option>
						<option value="3">Euros</option>
					</select><br><br>
				</div>
				<label class="font-weight-bolder mb-3 ml-3 col-md-4" id="resultado">Resultado: 0.00</label><br>
				<label  class="font-weight-bolder mb-3 col-md-8 ml-3" id="costo"></label><br>
				<div class="auto" id="auto" style="display:none">
					<input class="ml-3" id="dolar" name="dolar"></input>
					<input class="ml-3" id="euro" name="euro"></input>
					<input class="ml-3" name="resultado2" id="resultado2"></input>

				</div>

				<input type="submit" class="btn ml-4 btn-success" id="registrarCompra" value="Comprar"></input>
				<a href="invertir.php" class="btn btn-danger">Cancelar</a>
			</form>
		</div>
		<div class="col-md-6 tabla">
		<table class="table mt-2 table-bordered table-hover">
        <thead>
            <tr class="bg-primary text-white">
                <th>Compra</th>
                <th>Precio Dolar</th>
                <th>Precio Euro</th>
                <th>Fecha de compra</th>
            </tr>
        </thead>
        <tbody>
        <?php 
$inc = include("dbdbd.php");

if ($inc) {
	$consulta = "SELECT * FROM divisas";
	$resultado = mysqli_query($conex,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $compra = $row['compra'];
	    $dolar = $row['dolar'];
	    $euro = $row['euro'];
	    $fecha = $row['fecha'];
	    ?>
        <div>
                <tr>
                    <td><?php echo $compra ?></td>
                    <td><?php echo $dolar ?></td>
                    <td><?php echo $euro ?></td>
                    <td><?php echo $fecha ?></td>
                </tr>
        </div> 
	    <?php
	    }
	}
}
?>
</table>
		</div>

	</div>
	
</div>


</body>

<script  type="text/javascript">
		function convertir() {
			
			var valor=parseFloat(document.getElementById("Cantidad").value);
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
				var dolar = 3+aleatorio2;
				var euro = 4+aleatorio2;

				document.getElementById("dolar").value = dolar;
				document.getElementById("euro").value = euro;
				
				
				resultado=0;
				costo="";
				//soles a dolares
				if(de==1&&a==2){
					resultado=valor/dolar;
					document.getElementById("resultado").innerHTML="Resultado: $"+resultado.toFixed(2);
					costo="El valor del dolar es: $"+dolar;
					document.getElementById("costo").innerHTML=costo;
					document.getElementById("resultado2").value = "$ " + resultado.toFixed(2);

				}
				//soles a euro
				else if(de==1&&a==3){
					resultado=valor/euro;
					document.getElementById("resultado").innerHTML="Resultado: €"+resultado.toFixed(2);
					costo="El valor del euro es: €"+euro;
					document.getElementById("costo").innerHTML=costo;
					document.getElementById("resultado2").value = "€ " + resultado.toFixed(2);

				}
				//dolar a soles
				else if(de==2&&a==1){
					resultado=valor*dolar;
					document.getElementById("resultado").innerHTML="Resultado: S/"+resultado.toFixed(2);
					costo="El valor del dolar es: $"+dolar;
					document.getElementById("costo").innerHTML=costo;
					document.getElementById("resultado2").value = "S/ " + resultado.toFixed(2);

				}
				//dolar a euro
				else if(de==2&&a==3){
					resultado=valor*(dolar/euro);
					document.getElementById("resultado").innerHTML="Resultado: €"+resultado.toFixed(2);
					costo="El valor del euro es: €"+euro;
					document.getElementById("costo").innerHTML=costo;
					document.getElementById("resultado2").value = "€ " + resultado.toFixed(2);

					
				}
				//euro a soles
				else if(de==3&&a==1){
					resultado=valor*euro;
					document.getElementById("resultado").innerHTML="Resultado: S/"+resultado.toFixed(2);
					costo="El valor del euro es: €"+euro;
					document.getElementById("costo").innerHTML=costo;
					document.getElementById("resultado2").value = "S/ " + resultado.toFixed(2);
				}
				//euro a dolar
				else if(de==3&&a==2){
					resultado=valor*(euro/dolar);
					document.getElementById("resultado").innerHTML="Resultado: $"+resultado.toFixed(2);
					costo="El valor del dolar es: $"+dolar;
					document.getElementById("costo").innerHTML=costo;
					document.getElementById("resultado2").value = "$ " + resultado.toFixed(2);
				}
				//soles a soles
				else if(de==1 && a==1 || de==2 && a==2 || de==2 && a==2 ){
					var resultado = document.getElementById("Cantidad").value;
					document.getElementById("resultado").innerHTML="Resultado: " + resultado;
					document.getElementById("costo").innerHTML="";
				}	
			}
		}






	</script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>

<?php
} else {
	header("location:index.php");
	}
?>

