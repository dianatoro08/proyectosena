<?php
require_once 'conexibd.php';

    $sql = "DELETE FROM reservas WHERE id = ". $_GET['id'];
    $result = $conn->query($sql);
    if ($result) {
        echo json_encode("ok");
    } else {
        echo "Error al eliminar la reserva: " . $conn->error;
    }

?>