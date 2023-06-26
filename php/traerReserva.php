<?php 
require_once 'conexibd.php';

$sql = "SELECT * FROM reservas where id = ". $_GET['id'];
$result = $conn->query($sql);


$fila = mysqli_fetch_array($result);
echo json_encode($fila);
?>