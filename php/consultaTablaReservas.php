<?php
require_once 'conexibd.php';

$sql = "SELECT * FROM reservas where numeroDocumento = ". $_GET['documento'];
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while ($row = mysqli_fetch_array($result)) {
		echo "	<center>";
		echo "	<tr>";
		echo " 		<td>".$row['numeroDocumento']."</td>"; 
		echo " 		<td>".$row['nombresCliente']."</td>";
		echo " 		<td>".$row['correoElectronico']."</td>";
		echo " 		<td>".$row['numeroTelefono']."</td>";
		echo " 		<td>".$row['fechaEntrada']."</td>";
		echo " 		<td>".$row['fechaSalida']."</td>";
		echo "	</tr>";
		echo "	</center>";
	
	}
}
else {
	echo "No se encontraron reservas para el número de documento: $documento";
}


