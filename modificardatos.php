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
    .invertir{
        border: 0.5px solid black;
    }
    .imgmodificar{
        width: 90%;
        height: 100%;  
    }

  </style>
  
</head>
<body class="fondo">

<?php 
    require_once "php/conexion.php";
    $usuarioSesion = $_SESSION['user'];
    $conexion=conexion();
    
    $sql="SELECT * from usuarios where usuario='$usuarioSesion'";
    $result=mysqli_query($conexion,$sql);
        if(mysqli_num_rows($result) == 1 ){
            $row = mysqli_fetch_array($result);
            $nombres = $row['nombres'];
            $primerApellido = $row['primerApellido'];
            $segundoApellido = $row['segundoApellido'];
            $dni = $row['dni'];
            $telefono = $row['telefono'];
            $password = $row['password'];
            $correo = $row['correo'];

        }
?>
  <nav class="nav nav-pills navegacion flex-column bg-dark flex-sm-row">
    <a class="flex-fill text-center nav-link bg-dark m-1 p-2" href="principal.php">SmartMoney</a>
    <a class="flex-fill text-center nav-link bg-dark m-1 p-2" href="invertir.php">Invertir</a>
    <a class="flex-fill text-center nav-link bg-dark m-1 p-2" href="grafico.php">Gráficos</a>
    <a class="flex-fill text-center nav-link bg-dark m-1 p-2" href="usuario.php">Usuario</a>
    <a class="flex-fill text-center salir nav-link bg-dark m-1 p-2" href="php/salir.php">Salir</a>
  </nav>

  <div class="container">
    <div class="row">

        <div class="col-md-12 col-lg-12 col-xl-7">
            <div class="panel panel-body bg-light p-3 rounded my-4">

                <div class="my-3 col-12 text-center">
                    <h3 class="d-block bg-warning py-1">Modificar información</h3>
                </div>

                <form id="frmDatos">
                    <div class="form-row justify-content-between ">
                    
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 my-2">
                            <label for="">Nombres</label>
                            <input type="text" id="nombres" name="nombres" class="form-control" value="<?php echo $nombres; ?>" placeholder="Nombres">
                        </div>

                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 my-2">
                            <label for="">Primer Apellido</label>
                            <input type="text" id="primerApellido" name="primerApellido" class="form-control" value="<?php echo $primerApellido; ?>" placeholder="Primer Apellido">
                        </div>

                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 my-2">
                            <label for="">Segundo Apellido</label>
                                <input type="text" id="segundoApellido" name="segundoApellido" class="form-control" value="<?php echo $segundoApellido; ?>" placeholder="Segundo Apellido">
                        </div>

                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 my-2">
                            <label for="">Numero DNI</label>
                            <input type="text" id="dni" class="form-control" name="dni" value="<?php echo $dni; ?>" placeholder="DNI" value="12345678">
                        </div>

                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 my-2">
                            <label for="">Teléfono</label>
                            <input type="text" id="telefono" class="form-control" name="telefono" value="<?php echo $telefono; ?>" placeholder="Teléfono">
                        </div>

                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 my-2">
                            <label for="">Usuario</label>
                            <input type="text" id="usuario" class="form-control" value="<?php echo $usuarioSesion; ?>" placeholder="Usuario" disabled>
                        </div>

                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 my-2">
                            <label for="">Correo Electrónico</label>
                            <input type="email" id="correo" class="form-control" value="<?php echo $correo; ?>" placeholder="Correo electrónico" disabled>
                        </div>

                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4 my-2">
                            <label for="">Contraseña</label>
                            <input type="password" id="password1" name="password1" class="form-control" placeholder="Contraseña">
                        </div>

                        <div class="col-12 col-sm-12 col-md-12 co-lg-6 col-xl-4 my-2">
                            <label for="">Repetir contraseña</label>
                            <input type="password" id="password2" name="password2" class="form-control" placeholder="Contraseña">
                        </div>


                    </div>

                    <div class="form-row justify-content-around botones my-3">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <span class="btn btn-success d-block" id="guardarDatos">Guardar</span>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <a class="btn btn-danger d-block" href="usuario.php">Cancelar</a>
                        </div>
                    </div>

                </form>

            </div>
        </div>
        <input style="display:none" name="usuarioSesion" type="text" id="usuarioSesion" value="<?php echo $usuarioSesion ?>">
        <div class="d-none d-xl-block col-md-6 col-lg-6 col-xl-5 my-4">
            <img src="img/modificar.jpg" class="img-fluid imgmodificar rounded" alt="fondomodificar">
        </div>

    </div>
  </div>

  <script type="text/javascript">
    
    $(document).ready(function(){
        $('#guardarDatos').click(function(){
            if($('#nombres').val()==""){
				alertify.alert("Debes agregar el nombre");
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
			}else if($('#password1').val()==""){
				alertify.alert("Debes agregar la contraseña");
				return false;
			}else if($('#password2').val()==""){
				alertify.alert("Debes agregar la contraseña");
				return false;
            }else if($('#password1').val() !== $('#password2').val()){
				alertify.alert("Las contraseñas no coinciden");
				return false;
            }
            
            datos = "nombres=" + $('#nombres').val() + "&primerApellido=" + $('#primerApellido').val() + "&segundoApellido=" + $('#segundoApellido').val() + 
            "&dni=" + $('#dni').val() + 
            "&telefono=" + $('#telefono').val() + "&password=" + $('#password1').val() + "&usuarioSesion=" + $('#usuarioSesion').val();

            console.log(datos);

            $.ajax({
                type: "POST",
                url:"php/actualizar.php",
                data:datos,
                success:function(r){

                    if(r==2){
                        alertify.alert("Este DNI ya se encuentra registrado, ingrese otro por favor.");
                    }else if(r==99){
						alertify.alert("Este número de telefono se encuentra registrado, ingrese otro por favor..");
					}else if(r==1){
                        alertify.success("Datos modificados con éxito.");
					}else{
                        alertify.alert("Datos fallo.");
					}
                }
            });

        });
    });

  </script>




 <!--|
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  |-->
  
</body>
</html>

<?php
} else {
	header("location:index.php");
	}
?>