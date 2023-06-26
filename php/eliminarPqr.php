<?php
require_once 'conexibd.php';

    $sql = "DELETE FROM formulario_pqr WHERE id_pqr = ". $_GET['id'];
    $result = $conn->query($sql);
    if ($result) {
        echo json_encode("ok");
    } else {
        echo "Error al eliminar la pqr: " . $conn->error;
    }

?>