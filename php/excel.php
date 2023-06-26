<?php

require_once 'conexibd.php';
$documento = $_GET['documento'];
echo $documento;

$sql = "SELECT * FROM reservas where numeroDocumento = " . $documento;
$result = $conn->query($sql);

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=reservacion.xls");
// header("Pragma: public");
// header("Expires: 0");
// $filename = "nombreArchivoQueDescarga.xls";
// header("Pragma: no-cache");
// header("Cache-Control: must-revalidate, post-check=0, pre-check=0");


?>

<table class="table data-table" style="width:100%">

    <thead class="thead-dark">

        <tr>
            <th>Id</th>
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
        if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_array($result)) {
                echo "	<center>";
                echo "	<tr>";
                echo " 		<td>" . $row['id'] . "</td>";
                echo " 		<td>" . $row['numeroDocumento'] . "</td>";
                echo " 		<td>" . $row['nombresCliente'] . "</td>";
                echo " 		<td>" . $row['correoElectronico'] . "</td>";
                echo " 		<td>" . $row['numeroTelefono'] . "</td>";
                echo " 		<td>" . $row['fechaEntrada'] . "</td>";
                echo " 		<td>" . $row['fechaSalida'] . "</td>";
                echo "	</tr>";
                echo "	</center>";

            }
        } else {
            echo "No se encontraron reservas para el número de documento:" . $_GET['documento'];
        }
        ?>
    </tbody>
</table>