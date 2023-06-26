<?php
require_once 'conexibd.php';

if (isset($_POST['guardar'])) {
    $documento = $_POST['documento'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $estadoPQR = $_POST['estadoPQR'];
   
    $sql = "INSERT INTO formulario_pqr (numero_documento, fecha, nombre_completo, correo, asunto, descripcion,estadoPQR)
            VALUES ('$documento', NOW(),'$nombre', '$email', '$asunto', '$mensaje','$estadoPQR')";
   
    if ($conn->query($sql) === TRUE) {
        $message = "PQR creada con exito!";
        header("Location: formularioPqr.php?message=".$message);
    } else {
        echo "Error al realizar la pqr: " . $conn->error;
    }
}


?>