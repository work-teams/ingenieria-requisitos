<?php 

	require_once "conexion.php";
	$conexion=conexion();

		$primerNombre=$_POST['primerNombre'];
		$segundoNombre=$_POST['segundoNombre'];
		$primerApellido=$_POST['primerApellido'];
		$segundoApellido=$_POST['segundoApellido'];
		$dni=$_POST['dni'];
		$telefono=$_POST['telefono'];
		$usuario=$_POST['usuario'];
		$password=sha1($_POST['password']);
		$correo=$_POST['correo'];

		if(buscaRepetido($usuario,$correo,$conexion)==9){
			echo 2;
		}else if(buscaRepetido($usuario,$correo,$conexion)==8){
			echo 99;
		}
		else{
			$sql="INSERT into usuarios (primerNombre,segundoNombre,primerApellido,segundoApellido,dni,telefono,usuario,password,correo)
				values ('$primerNombre','$segundoNombre','$primerApellido','$segundoApellido','$dni','$telefono','$usuario','$password','$correo')";
			echo $result=mysqli_query($conexion,$sql);
		}

		function buscaRepetido($user,$corr,$conexion){
			
			$sql="SELECT * from usuarios where usuario='$user'";

			$sql2="SELECT * from usuarios where correo='$corr'";
			
			$result=mysqli_query($conexion,$sql);

			$result2=mysqli_query($conexion,$sql2);
			
			
			if(mysqli_num_rows($result) > 0){
				return 9;
			}else if(mysqli_num_rows($result2) > 0){
				return 8;
			}
			else{
				return 0;
			}
		}
 ?>