<?php
require_once 'conexibd.php';

if (isset($_POST['registro'])) {
    $numeroDocumento = $_POST['numero-documento'];
    $nombresCliente = $_POST['nombresCliente'];
    $correoElectronico = $_POST['correo-electronico'];
    $numeroTelefono = $_POST['numero-telefono'];
    $fechaEntrada = $_POST['fecha-entrada'];
    $fechaSalida = $_POST['fecha-salida'];
    $numeroHabitaciones = $_POST['numero-habitaciones'];
    $numeroAdultos = $_POST['numero-adultos'];
    $numeroNinos = $_POST['numero-ninos'];
    $servicioDesayuno = isset($_POST['servicio-desayuno']) ? 1 : 0;
    $servicioAlmuerzo = isset($_POST['servicio-almuerzo']) ? 1 : 0;
    $servicioHabitacion = isset($_POST['servicio-habitacion']) ? 1 : 0;
    $menuSeleccionado =  isset($_POST['menu-seleccionado']) && $_POST['menu-seleccionado'] != '' && $_POST['menu-seleccionado'] != null ?  $_POST['menu-seleccionado']: null;
    $tipoPago = $_POST['tipo-pago'];

    $sql = "INSERT INTO reservas (numeroDocumento, nombresCliente, correoElectronico, numeroTelefono, fechaEntrada, fechaSalida, numeroHabitaciones, numeroAdultos, numeroNinos, servicioDesayuno, servicioAlmuerzo, servicioHabitacion, menuSeleccionado, tipoPago)
            VALUES ('$numeroDocumento', '$nombresCliente', '$correoElectronico', '$numeroTelefono', '$fechaEntrada', '$fechaSalida', $numeroHabitaciones, $numeroAdultos, $numeroNinos, $servicioDesayuno, $servicioAlmuerzo, $servicioHabitacion, '$menuSeleccionado', '$tipoPago')";
   
    if ($conn->query($sql) === TRUE) {
        $message = "Reserva creada con exito";
        header("Location: formularioRe.php?message=".$message);
    } else {
        
        echo "Error al realizar la reserva: " . $conn->error;
    }
}


?>
