<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<?php require_once "scripts2.php"; ?>
	<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
	<style>
	.fondoRegistro{
		background-image: url("img/fondoRegist2.jpg");
        background-repeat: no-repeat;
        background-size: cover;
		width:auto;
		height: 100vh;
	}
	.encabezado{
		font-size: 30px;
		font-weight: bold;
	}
	.titulot{
		font-family: 'Russo One', sans-serif;
	}
</style>
</head>
<body class="fondoRegistro">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="panel panel-danger mt-4">
					<h1 class="text-dark text-center titulot">SMART MONEY</h1>
					<p class="text-dark encabezado text-center">Registro de usuario</p>
				</div>
			</div>
		</div>
		<div class="panel panel-body">
			<form id="frmRegistro">
				<div class="form-row justify-content-between ">
					<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-3">
						<label for="">Primer Nombre</label>
						<input type="text" id="primerNombre" class="form-control" placeholder="Primer Nombre">
					</div>
					<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-3">
						<label for="">Segundo Nombre</label>
							<input type="text" id="segundoNombre" class="form-control" placeholder="Segundo Nombre">
					</div>
					<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-3">
						<label for="">Primer Apellido</label>
						<input type="text" id="primerApellido" class="form-control" placeholder="Primer Apellido">
					</div>
					<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-3">
						<label for="">Segundo Apellido</label>
							<input type="text" id="segundoApellido" class="form-control" placeholder="Segundo Apellido">
					</div>
					<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
						<label for="">Numero DNI</label>
						<input type="text" id="dni" class="form-control" placeholder="DNI">
					</div>
					<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
						<label for="">Teléfono</label>
						<input type="text" id="telefono" class="form-control" placeholder="Teléfono">
					</div>
					<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
						<label for="">Fecha Nacimiento</label>
						<input class="form-control" id="fechaNac" type="date" value="" id="example-date-input">
					</div>
					<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
						<label for="">Usuario</label>
						<input type="text" id="usuario" class="form-control" placeholder="Usuario">
					</div>
					<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
						<label for="">Correo Electrónico</label>
						<input type="text" id="correo" class="form-control" placeholder="Correo electrónico">
					</div>
					<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
						<label for="">Contraseña</label>
						<input type="password" id="password" class="form-control" placeholder="Contraseña">
					</div>
				</div>
				<div class="form-row justify-content-around botones">
					<div class="col-3 col-sm-2 col-md-2 col-lg-1 col-xl-1">
						<a href="index.php" class="btn btn-success d-block ">Ingresar</a>
					</div>
					<div class="col-3 col-sm-2 col-md-2 col-lg-1 col-xl-1">
						<span class="btn btn-primary d-block" id="registrarNuevo">Registrar</span>
					</div>
				</div>
			</form>
		</div>
	</div>

	<script type="text/javascript">
	$(document).ready(function(){
		$('#registrarNuevo').click(function(){

			if($('#primerNombre').val()==""){
				alertify.alert("Debes agregar el primer nombre");
				return false;
			}else if($('#segundoNombre').val()==""){
				alertify.alert("Debes agregar el segundo nombre");
				return false;
			}else if($('#primerApellido').val()==""){
				alertify.alert("Debes agregar el primer apellido");
				return false;
			}else if($('#segundoApellido').val()==""){
				alertify.alert("Debes agregar el segundo apellido");
				return false;
			}else if($('#dni').val()==""){
				alertify.alert("Debes agregar el DNI");
				return false;
			}else if($('#telefono').val()==""){
				alertify.alert("Debes agregar el telefono");
				return false;
			}else if($('#usuario').val()==""){
				alertify.alert("Debes agregar el usuario");
				return false;
			}else if($('#password').val()==""){
				alertify.alert("Debes agregar la contraseña");
				return false;
			}else if($('#correo').val()==""){
				alertify.alert("Debes agregar el correo");
				return false;
			}

			cadena="primerNombre=" + $('#primerNombre').val() +
					"&segundoNombre=" + $('#segundoNombre').val() +
					"&primerApellido=" + $('#primerApellido').val() + 
					"&segundoApellido=" + $('#segundoApellido').val() + 
					"&dni=" + $('#dni').val() + 
					"&telefono=" + $('#telefono').val() + 
					"&usuario=" + $('#usuario').val() + 
					"&password=" + $('#password').val() +
					"&correo=" + $('#correo').val();

					$.ajax({
						type:"POST",
						url:"php/registro.php",
						data:cadena,
						success:function(r){

							if(r==2){
								alertify.alert("Usuario ya registrado, ingrese otro por favor.");
							}else if(r==99){
								alertify.alert("Correo ya registrado, ingrese otro por favor.");
							}
							else if(r==1){
								$('#frmRegistro')[0].reset();
								alertify.success("Usuario registrado con éxito.");
							}else{
								alertify.error("Error al registrar. Intente de nuevo.");
							}
						}
					});
		});
	});
</script>
</body>
</html>