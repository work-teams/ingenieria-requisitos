<?php

require_once "conexion.php";
$conexion=conexion();

$dolar = $_POST['dolar'];
$euro = $_POST['euro'];
$compra = $_POST['resultado2'];

$sql="INSERT into divisas (dolar, euro,compra) values ('$dolar','$euro','$compra')";
echo $result=mysqli_query($conexion,$sql);

header("location:../divisas.php");

?>

