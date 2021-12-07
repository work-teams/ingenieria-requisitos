<?php 

  session_start();
  
  $myusuario = $_SESSION['user'];
  $myusuario = strtoupper($myusuario);
  if(isset($_SESSION['user']))
  {
    ?>
      <!DOCTYPE html>
      <html lang="en">

      <head>
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

        <a class="user-name"><?php echo $myusuario ?></a>

        <div class="user-btn">
          <div class="user-box">
            <a href="modificardatos.php">Datos<img src="img/datos_usuario.png"></a>
            
          </div>
          <div class="user-box" >
            <a href="historial.php" style="  margin-left: 105px;margin-right: 105px;">Historial<img src="img/historial_usuario.png"></a>
            
          </div>          
        </div>

      </body>
      </html>
    <?php
  } else {
    header("location:index.php");
  }
?>