<?php
require_once 'conexibd.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $accion = $_POST['accion'];

    $_SESSION['documento'] = $_POST['documento'];
    
    if ($accion === 'consultar') {
        
        header("Location: tablaReservas.php?documento=".$_SESSION['documento']);


    } elseif ($accion === 'eliminar') {
       
        $documento = $_POST['documento'];

        $sql = "DELETE FROM reservas WHERE numeroDocumento = '$documento'";
        if ($conn->query($sql) === TRUE) {
            echo "Reserva eliminada exitosamente para el número de documento: $documento";
        } else {
            echo "Error al eliminar la reserva: " . $conn->error;
        }

        
    }elseif ($accion === "pqrs") {
        header("Location: tablaPqrs.php?documento=".$_SESSION['documento']);
    }
}
?>