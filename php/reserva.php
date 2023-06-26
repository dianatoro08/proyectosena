<?php include "../php/session.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRDhotel</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
  <?php include('menuOpciones.php'); ?>
 <?php if($_SESSION["rol"] == 1){ ?>
  <main>
    <div class="room">
      <h2>Habitación individual</h2>
      <img src="../img/habitacionindividual.jpg">
      <p>Disfruta de una habitación individual con todas las comodidades por solo $50.000 por noche.</p>
      <button onclick="window.location.href='formularioRe.php'">Reservar ahora</button>
    </div>

    <div class="room">
      <h2>Habitación doble</h2>
      <img src="../img/habitacion.jpg">
      <p style="padding-bottom: 23px;">Comparte una habitación doble con tu pareja o amigo por solo $70.000 por noche.</p>
      <button onclick="window.location.href='formularioRe.php'">Reservar ahora</button>
    </div>

    <div class="room">
      <h2>Suite de lujo</h2>
      <img src="../img/habitacionlujo.jpg">
      <p style="padding-bottom: 23px;">Siéntete como un rey en nuestra suite de lujo por solo $150.000 por noche.</p>
      <button onclick="window.location.href='formularioRe.php'">Reservar ahora</button>
    </div>
  </main>
 <?php }elseif($_SESSION["rol"] == 2){ ?>
  <footer>
    <div class="container">
      <button class="btn btn-success" onclick="window.location.href='consultarReserva.php'">Consultar Reserva Habitaciones</button>
      <!-- <button style="background-color: red;" onclick="window.location.href='eliminarReserva.html'">Eliminar reserva</button> -->
    </div>
  </footer>
   <?php } ?>
</body>
</html>

