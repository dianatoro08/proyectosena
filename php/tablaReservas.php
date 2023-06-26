<?php
require_once 'conexibd.php';
$documetoNum=$_GET['documento'];
echo $documetoNum;
$sql = "SELECT * FROM reservas where numeroDocumento = " . $_GET['documento'];
$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar reserva</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

    <script src="../js/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>

<body>


    <header>
        <div class="logo">
            <img src="../img/logo_hotel.PNG" alt="Logo del hotel">
        </div>
        <h1>Consultar Reserva</h1>
    </header>
    <div class="container">
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Actualizar reserva</h5>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="actualizarReserva.php">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Fecha de entrada:</label>
                                    <input type="date" class="form-control" name="fecha_entrada" id="fecha_entrada">
                                </div>
                                <div class="col-md-6">
                                    <label>Fecha de salida:</label>
                                    <input type="date" class="form-control" name="fecha_salida" id="fecha_salida">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Número de habitaciones:</label>
                                    <input type="number" class="form-control" name="numero_habitaciones"
                                        id="numero_habitaciones">
                                </div>
                                <div class="col-md-6">
                                    <label>Número de adultos:</label>
                                    <input type="number" class="form-control" name="numero_adultos" id="numero_adultos">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Número de niños:</label>
                                    <input type="number" class="form-control" name="numero_ninos" id="numero_ninos">
                                </div>
                            </div>
                            <input type="hidden" name="id_reserva" id="id_reserva">
                            <input type="hidden" name="documento" id="documento">
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success" value="Actualizar">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="table-responsive">
            <div class="text-end">
                <!-- <button type='button' class='btn btn-success'>Excel -->
                
                <a id="go" type="hidden" href="./excel.php?documento=<?php echo $documetoNum;?>"class="link-success"  >Excel
                    <i class="bi bi-file-earmark-excel"></i>

                </a>
                

                <!-- </button> -->
            </div>
            <table class="table data-table" style="width:100%">

                <thead class="thead-dark">

                    <tr>
                        <th>Id</th>
                        <th>Documento</th>
                        <th>Nombre</th>
                        <th>Correo Electronico</th>
                        <th>Numero</th>
                        <th>Fecha Entrada</th>
                        <th>Fecha Salida</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                        <!-- <th>Excel</th> -->
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
                            echo " 		<td>
                                        <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal' onClick='traerData(" . $row['id'] . "," . $row['numeroDocumento'] . ")'>
                                                <i class='bi bi-pencil'></i>
                                        </button>
                                       </td>";
                            echo " 		<td> 
                                        <button type='button' class='btn btn-danger' onClick='eliminarReserva(" . $row['id'] . "," . $row['numeroDocumento'] . ")'>
                                            <i class='bi bi-trash'></i>
                                        </button>
                                    </td>";
                            // echo " 	    <td> 
                            //                 <button type='button' class='btn btn-success' onClick='downloadEX()'>
                            //                     <i class='bi bi-file-earmark-excel'></i>
                            //                 </button>
                            //             </td>";
                            // echo "	</tr>";
                            echo "	</center>";

                        }
                    } else {
                        echo "No se encontraron reservas para el número de documento:" . $_GET['documento'];
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
<script>


    function downloadEX() {
        $('#go').click();
    }


    function traerData(id, documento) {
        $('#id_reserva').val(id);
        $('#documento').val(documento);
        $.ajax({
            type: "GET",
            url: 'traerReserva.php',
            data: {
                id: id
            },
            success: function (data) {
                var reserva = JSON.parse(data);
                $('#fecha_entrada').val(reserva[5]);
                $('#fecha_salida').val(reserva[6]);
                $('#numero_habitaciones').val(reserva[7]);
                $('#numero_adultos').val(reserva[8]);
                $('#numero_ninos').val(reserva[9]);
            }
        });
    }

    function eliminarReserva(id, documento) {
        const Toast = Swal.mixin({
            toast: true,
            position: 'bottom-end',
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
            onOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
        $.ajax({
            type: "GET",
            url: 'eliminarReserva.php',
            data: {
                id: id
            },
            success: function (data) {
                var reserva = JSON.parse(data);
                if (reserva == "ok") {
                    Toast.fire({
                        icon: 'success',
                        title: 'Reserva eliminada con exito!'
                    }).then((result) => {
                        window.location.href = 'tablaReservas.php?documento=' + documento;
                    });
                }
            }
        });
    }
</script>
