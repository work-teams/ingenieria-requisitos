<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Smart Money</title>

<?php require_once "scripts2.php";?>

<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">

<style>

	html{
		box-sizing: border-box;
		font-size: 62.5%; /*Reser para Rems - 62.5 = 10pxde 16 px ++*/
	}

	*, *::before, *:after{
		box-sizing: inherit;
	}

	.fondoindex{
		background-image: url("img/bitcoin-3227986.jpg");
        background-repeat: no-repeat;
        background-size: cover;
		width:auto;
		height: 100vh;
	}
	.titulot{
		font-family: 'Russo One', sans-serif;
		font-size: 5rem; 
	}
	.encabezado{
		-webkit-text-stroke: 0.1rem black;
		color: transparent; 
		font-size: 3.5rem;
		font-weight: bold;
	}
</style>
</head>

<body class="fondoindex">

	<div class="container fluid">
	<!--	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand text-white">codestark</a>
			<button class="navbar-toggler" data-target="#menu" data-toogle="collapse" type="button">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="menu">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a href="#" class="nav-link">Inicio</a>
					</li>
					<li class="nav-item active">
						<a href="#" class="nav-link">Posts</a>
					</li>
				</ul>
			</div>
			
		</nav>

-->

    	<div class="row mt-4 justify-content-center">
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
				<p class="text-light text-center titulot p-4">SMART MONEY</p>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-md-offset-4">
						<div class="panel-heading">
			    			<h3 class="panel-title encabezado text-light text-center m-3">Iniciar sesión</h3>
			 			</div>
    			<div class="row justify-content-center">
					<div class="col-8  panel panel-default">
			  			<div class="panel-body">
			    			<form accept-charset="UTF-8" role="form" action="" method="" name="">
                    			<fieldset>
									<div class="form-group pl-2 pr-2">
										<input class="form-control" placeholder="Usuario"
										id="usuario"
										type="text" required>
									</div>

									<div class="input-group pr-2 pl-2">
										<input id="password" placeholder="Contraseña" type="password" class="form-control" required>
										<div class="input-group-append">
											<button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
										</div>
									</div>

									<div class="form-group mt-3 pl-2 pr-2">
										<span class="btn btn-success d-block" id="entrarSistema">Entrar</span>
									</div>
									<p class="text-light text-center m-2">¿No tienes cuenta aún? <a href='registro.php'>Regístrate</a></p>
			    				</fieldset>
			      			</form>
			    		</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#entrarSistema').click(function(){
				if($('#usuario').val()=="" && $('#password').val()!==""){
					alertify.alert("Usuario vacío");
					return false;
				}else if($('#password').val()=="" && $('#usuario').val()!==""){
					alertify.alert("Contraseña vacía");
					return false;
				}else if($('#password').val()=="" && $('#usuario').val()==""){
					alertify.alert("Campos vacíos");
					return false;
				}

				cadena="usuario=" + $('#usuario').val() + 
						"&password=" + $('#password').val();

						$.ajax({
							type:"POST",
							url:"php/login.php",
							data:cadena,
							success:function(r){
								if(r==1){
									window.location="inicio.php";
								}else{
									alertify.alert("Datos incorrectos");
								}
							}
						});
			});	
		});

		function mostrarPassword(){
			var cambio = document.getElementById("password");
			if(cambio.type == "password"){
				cambio.type = "text";
				$('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
			}else{
				cambio.type = "password";
				$('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
			}
		} 
	</script>


</body>
</html>