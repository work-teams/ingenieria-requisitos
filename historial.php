<?php 
	session_start();

	if(isset($_SESSION['user'])){
    ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <?php require_once "php/scripts.php";?>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Smart Money</title>        
            <link rel="stylesheet" href="css/estilosComunes.css">
        </head>
        <body>
            <nav class="barra">
            <a href="index.php">SmartMoney</a>
            <a href="invertir.php">Invertir</a>
            <a href="grafico.php">Graficos</a>
            <a href="usuario.php">Usuario</a>
            <a href="php/salir.php">Cerrar Sesion</a>          
            </nav>  

            <a class="subtitulo m-5">Historial de transacciones</a>

            <div class="container-fluid mt-5">
                <div class="row m-0 justify-content-center">
                    <div class="col-12 col-md-12 col-lg-12 col-xl-8">              
                        <div class="panel panel-body bg-light rounded mt-2">
                            <div class="col-12">
                                <table class="table mt-2 table-bordered table-hover">
                                    <thead>
                                        <tr class="bg-primary text-center text-white ">
                                            <th>Pagado</th>
                                            <th>Comprado</th>
                                            <th>Dólar</th>
                                            <th>Euro</th>
                                            <th>Fecha</th>
                                        </tr>
                                    </thead>
                                    
                                    <?php 
                                        $inc = include("php/dbdbd.php");
                                        $usuario = $_SESSION['user'];
                                        if ($inc) {
                                            $consulta = "SELECT * FROM `$usuario` ORDER BY id DESC";
                                            $resultado = mysqli_query($conex,$consulta);
                                            if ($resultado) {
                                                while ($row = $resultado->fetch_array()) {
                                                    $descuento = $row['descuento'];
                                                    $compra = $row['compra'];
                                                    $precioDolar = $row['precioDolar'];
                                                    $precioEuro = $row['precioEuro'];
                                                    $fecha = $row['fecha'];
                                                    ?>
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
                </div>
            </div>
        
        </body>
        </html>

    <?php
    } else {
	    header("location:index.php");
	}
?>