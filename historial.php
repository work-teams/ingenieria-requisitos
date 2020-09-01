<?php 
	session_start();

	if(isset($_SESSION['user'])){
?>
<!DOCTYPE html>
<html>
<head>
	<title>Smart Money</title>
	<?php require_once "php/scripts.php";?>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/historial.css">
  
</head>
<body class="fondo">

  <nav class="nav nav-pills navegacion flex-column bg-dark flex-sm-row">
    <a class="flex-fill text-center nav-link bg-dark m-1 p-2" href="principal.php">SmartMoney</a>
    <a class="flex-fill text-center nav-link bg-dark m-1 p-2" href="invertir.php">Invertir</a>
    <a class="flex-fill text-center nav-link bg-dark m-1 p-2" href="grafico.php">Gráficos</a>
    <a class="flex-fill text-center nav-link bg-dark m-1 p-2" href="usuario.php">Usuario</a>
    <a class="flex-fill text-center salir nav-link bg-dark m-1 p-2" href="php/salir.php">Salir</a>
  </nav>

  <div class="container-fluid">
    <div class="row">

        <div class="col-12 col-md-12 col-lg-12 col-xl-8">
        
            <div class="panel panel-body bg-light rounded mt-3">

                <div class="col-12 tabla">
                    <table class="table mt-2 table-bordered table-hover">

                        <thead>
                            <tr class="bg-primary text-center text-white">
                                <th>Pagado</th>
                                <th>Comprado</th>
                                <th>Dólar</th>
                                <th>Euro</th>
                                <th>Fecha</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php 
                            $inc = include("php/dbdbd.php");
                            if ($inc) {
                                $consulta = "SELECT * FROM divisas ORDER BY id DESC";
                                $resultado = mysqli_query($conex,$consulta);
                                if ($resultado) {
                                    while ($row = $resultado->fetch_array()) {
                                        $descuento = $row['descuento'];
                                        $compra = $row['compra'];
                                        $precioDolar = $row['precioDolar'];
                                        $precioEuro = $row['precioEuro'];
                                        $fecha = $row['fecha'];?>
                        <div>
                            <tr class="text-center">
                                <td><?php echo $descuento ?></td>
                                <td><?php echo $compra ?></td>
                                <td><?php echo $precioDolar ?></td>
                                <td><?php echo $precioEuro ?></td>
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

        <div class="d-none d-md-block col-md-6 col-lg-6 col-xl-4">
            <div class="my-3 col-12 text-center">
                <h3 class="d-block bg-warning py-1 mx-2 rounded">Historial de transacciones</h3>
                <img src="img/fondoHistorial.jpg" class="img-fluid imgmodificar rounded" alt="fondomodificar">
            </div>
            
        </div>

    </div>
  </div>

</body>
</html>

<?php
} else {
	header("location:index.php");
	}
?>