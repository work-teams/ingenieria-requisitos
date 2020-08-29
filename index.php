<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<title>Smart Money</title>

<?php require_once "php/scripts2.php";?>


<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">

<style>
	html{
		box-sizing: border-box;
		font-size: 70.5%; /*Reser para Rems - 62.5 = 10pxde 16 px ++*/
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

	<div class="container">
    	<div class="row mt-4 justify-content-center">
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
				<p class="text-light text-center titulot p-4">SMART MONEY</p>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-md-offset-4">
						<div class="panel-heading">
			    			<h3 class="panel-title encabezado text-light text-center m-3">Iniciar sesión</h3>
			 			</div>
    			<div class="row justify-content-center">
					<div class="col-8 panel panel-default">
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
										<span class="btn btn-success d-block btn-lg" id="entrarSistema">Entrar</span>
									</div>
									<h5 class="text-light text-center m-2">¿No tienes cuenta aún? <a href='registro.php'>Regístrate</a></h5>
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
								window.location="principal.php";
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