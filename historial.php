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
        height: 60%;  
    }
    .tabla{
			overflow:scroll;
     	height:490px;
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

  <script type="text/javascript">

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