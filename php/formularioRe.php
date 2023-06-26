<?php include "../php/session.php";
include "../php/condicionMenu.php";
require_once 'conexibd.php';

$sql = "SELECT numeroDocumento,nombresCliente,correoElectronico, numeroTelefono,fechaEntrada,fechaSalida FROM reservas where numeroDocumento = ". $_SESSION["documento"];
$resul = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRDhotel</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <script src="../js/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<?php include('menuOpciones.php'); ?>

<h1>Reserva</h1> 
  <div class="container">
    <?php
     if(isset($_GET['message'])){
        echo "<div class='alert alert-success'>".$_GET['message']."</div>";
     }
    ?>
    <?php if($_SESSION["rol"] == 1){ ?>

    <div class="mb-4 accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              Reservaciones Realizadas
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <table class="mt-4 table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Documento</th>
                        <th>Nombre</th>
                        <th>Correo Electronico</th>
                        <th>Número</th>
                        <th>Fecha Entrada</th>
                        <th>Fecha Salida</th>   
                    </tr>
                </thead>
                <tbody>
                  <?php 
                  if ($resul->num_rows > 0) {

                     while ($resultado = mysqli_fetch_array($resul)) {
                      echo "
                     <tr>
                        <td>
                       ". $resultado["numeroDocumento"].
                        "</td>
                        <td>".$resultado["nombresCliente"].
                        "</td>
                        <td>".$resultado["correoElectronico"].
                        "</td>
                        <td>".$resultado["numeroTelefono"].
                        "</td>
                        <td>".$resultado["fechaEntrada"].
                        "</td><td>".$resultado["fechaSalida"].
                        "
                    </tr>";
                    }
                  }?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    <form name="form1" method="post" id="formulario" action="insertReserva.php">
      <fieldset>
        <legend>Información del huésped:</legend>
        <div class="form-group">
          <label for="numero-documento">Número de documento:</label>
          <input type="text" class="form-control" id="numero-documento" name="numero-documento" required>
        </div>
        
        <div class="form-group">
          <label for="nombre-completo">Nombre Completo:</label>
          <input type="text" class="form-control" id="nombre-completo" name="nombresCliente" required>
        </div>

        <div class="form-group">
          <label for="correo-electronico">Dirección de correo electrónico:</label>
          <input type="email" class="form-control" id="correo-electronico" name="correo-electronico" required>
        </div>

        <div class="form-group">
          <label for="numero-telefono">Número de teléfono:</label>
          <input type="tel" class="form-control" id="numero-telefono" name="numero-telefono" required>
        </div>
      </fieldset>
  
      <fieldset>
        <legend>Detalles de la reserva:</legend>
        <div class="form-group">
          <label for="fecha-entrada">Fecha de entrada:</label>
          <input type="date" class="form-control" id="fecha-entrada" name="fecha-entrada" required>
        </div>

        <div class="form-group">
          <label for="fecha-salida">Fecha de salida:</label>
          <input type="date" class="form-control" id="fecha-salida" name="fecha-salida" required>
        </div>

       
        <div class="form-group">
          <label for="numero-habitaciones">Número de habitaciones:</label>
          <input type="number" class="form-control" id="numero-habitaciones" name="numero-habitaciones" required>
        </div>

        <div class="form-group">
          <label for="numero-adultos">Número de adultos:</label>
          <input type="number" class="form-control" id="numero-adultos" name="numero-adultos" required>
        </div>

        <div class="form-group">
          <label for="numero-ninos">Número de niños:</label>
          <input type="number" class="form-control" id="numero-ninos" name="numero-ninos" required>
        </div>
      </fieldset>
  
      <fieldset>
        <legend>Servicios adicionales:</legend>

        <?php include 'checksMenuSeleccionado.php';?>


        
      </fieldset>
  
      <fieldset>
        <legend>Información de pago:</legend>
        <div class="form-group">
          <label for="tipo-pago">Tipo de pago:</label>
          <select class="form-control" id="tipo-pago" name="tipo-pago" required>
            <option value="efectivo">Efectivo</option>
          </select>
        </div>
      </fieldset>
      <br>
  
      <input type="submit" class="btn btn-primary" value="Realizar reserva" name="registro" >
     
    </form>
     <?php }elseif($_SESSION["rol"] == 2){ ?>
       <input type="button" class="btn btn-success" value="Consultar reserva" name="registro" onclick="window.location.href='consultarReserva.php'">
     <?php }?>
  </div>
  <br>
</body>
</html>
