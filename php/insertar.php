<?php
    require_once "conexion.php";

    $conexion=conexion();

    $descuento=$_POST["descuento"];
    $dolar=$_POST["dolar"];
    $euro=$_POST["euro"];
    $compra=$_POST["resultado2"];

    $sql="INSERT into divisas (precioDolar,precioEuro,compra, descuento)
			values ('$dolar','$euro','$compra', '$descuento')";
	echo mysqli_query($conexion,$sql);

?>