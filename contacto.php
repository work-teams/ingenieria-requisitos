<?php 
  session_start();
  if(isset($_SESSION['user']))
  {
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
  <link rel="stylesheet" href="css/contacto.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body class="fondo">
  <nav class="nav nav-pills navegacion flex-column bg-dark flex-sm-row">
    <a class="flex-fill text-center nav-link bg-dark m-1 p-2" href="principal.php">SmartMoney</a>
    <a class="flex-fill text-center nav-link bg-dark m-1 p-2" href="invertir.php">Invertir</a>
    <a class="flex-fill text-center nav-link bg-dark m-1 p-2" href="grafico.php">Gráficos</a>
    <a class="flex-fill text-center nav-link bg-dark m-1 p-2" href="usuario.php">Usuario</a>
    <a class="flex-fill text-center salir nav-link bg-dark m-1 p-2" href="php/salir.php">Salir</a>
  </nav>
<div class="container mt-4">

      <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <h3 class="text-center rounded text-light py-2 invertir bg-warning">Contáctanos</h3>
          </div>
          <div class="col-md-4"></div>
        </div>
      </div>

      <div class="container-fluid mt-2">
        <div class="row">
          <div class="col-12 text-center text-light col-md-12">
            <h2 class="informacionc">Si tienes dudas con tu experiencia en Smart Money tienes a tu disposición los siguientes canales para enviarnos tus consultas.</h2>
          </div>
        </div>
      </div>

      <div class="container mt-4">
        <div class="row">

          <div class="col"></div>

          <div class="col-md-4 text-center">
            <a href="https://wa.me/51979204403" target="_blank"><img src="img/whatsappimg.png" class="btnw img-fluid" alt="whatsapp" srcset=""></a>
            <p class="text-light infot m-2 informacionc">Llámanos o contáctanos al Whatsapp.</p>
          </div>

          <div class="col-md-4 text-center">
            <a href="#" type="button" target="" data-toggle="modal" data-target="#exampleModal" data-whatever="SmartMoney"><img src="img/gmailok.png" class="btnw img-fluid" alt="whatsapp" srcset=""></a>
            <p class="text-light m-2 infot informacionc">Envíanos un correo electrónico.</p>
          </div>

          <div class="col"></div>

        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Nuevo mensaje</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
              <form>

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Asunto:</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>

                <div class="form-group">
                  <label for="message-text" class="col-form-label">Mensaje:</label>
                  <textarea class="form-control" id="message-text"></textarea>
                </div>

              </form>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-success" data-dismiss="modal">Enviar</button>
            </div>

          </div>
        </div>
      </div>
      </div>
  </div>

  <script type="text/javascript">
  $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var recipient = button.data('whatever')
  var modal = $(this)
  modal.find('.modal-title').text('Nuevo mensaje para ' + recipient)
  });
  </script>
  
</body>
</html>

<?php
} else {
	header("location:index.php");
	}
?>