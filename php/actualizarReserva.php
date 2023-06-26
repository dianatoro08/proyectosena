<?php
require_once 'conexibd.php';

    $id_reserva = $_POST['id_reserva'];
    $documento = $_POST['documento'];
    $fechaEntrada = $_POST['fecha_entrada'];
    $fechaSalida = $_POST['fecha_salida'];
    $numeroHabitaciones = $_POST['numero_habitaciones'];
    $numeroAdultos = $_POST['numero_adultos'];
    $numeroNinos = $_POST['numero_ninos'];

    $sql = "UPDATE reservas SET fechaEntrada = '$fechaEntrada', fechaSalida = '$fechaSalida', numeroHabitaciones = $numeroHabitaciones, numeroAdultos = $numeroAdultos, numeroNinos= $numeroNinos WHERE id = $id_reserva";
   
    if ($conn->query($sql) === TRUE) {
        header("Location: tablaReservas.php?documento=".$documento);
    } else {
        
        echo "Error al realizar la actualizacion reserva: " . $conn->error;
    }


?>
