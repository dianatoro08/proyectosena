<?php
require_once 'conexibd.php';

$sql = "SELECT * FROM formulario_pqr where numero_documento = ". $_GET['documento'];
$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consultar PQRS</title>
        <link rel="stylesheet" href="../css/estilos.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="../js/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>

    <header>
        <div class="logo">
            <img src="../img/logo_hotel.PNG" alt="Logo del hotel">
        </div>
        <h1>Consultar PQRS</h1>
    </header>
    <div class="container">
    <div class="table-responsive">
        <table class="table data-table"  style="width:100%">
            
            <thead class="thead-dark">
                
                <tr>
                    <th>Id</th>
                    <th>Fecha</th>
                    <th>Documento</th>
                    <th>Nombre</th>
                    <th>Correo Electronico</th>
                    <th>Asunto</th>
                    <th>Descripción</th>
                    <th>Estado PQR</th>
                    <th>Eliminar</th>             
                </tr>
            </thead> 
            <tbody>
                <?php 
                if ($result->num_rows > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                        echo "	<center>";
                        echo "	<tr>";
                        echo " 		<td>".$row['id_pqr']."</td>"; 
                        echo " 		<td>".$row['fecha']."</td>"; 
                        echo " 		<td>".$row['numero_documento']."</td>"; 
                        echo " 		<td>".$row['nombre_completo']."</td>";
                        echo " 		<td>".$row['correo']."</td>";
                        echo " 		<td>".$row['asunto']."</td>";
                        echo " 		<td>".$row['descripcion']."</td>";
                        echo "      <td>".$row['estadoPQR']."</td>";
                      echo " 		<td> <button type='button' class='btn btn-danger' onClick='eliminarPqr(".$row['id_pqr'].",".$row['numero_documento'].")'>
                      <i class='bi bi-trash'></i>
                    </button> <button type='button' onClick='ActualizaPQR(".$row['id_pqr'].",".$row['numero_documento'].");' data-bs-toggle='tooltip' data-bs-placement='bottom' title='Archivar PQR' class='btn btn-success'><i class='bi bi-archive'></i></button> </td>";
                        echo "	</tr>";
                        echo "	</center>";
                    
                    }
                }
                else {
                    echo "No se encontraron reservas para el número de documento:".$_GET['documento'];
                }
                ?>
            </tbody>
        </table>
    </div>    
</div>
</body>
</html>
<script>

 function ActualizaPQR(id,documento) {
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
            type: "POST", 
            url: 'ActualizaPQR.php',
            data: {
                id:id,
                estado: "archivada",
                documento: documento
            },  
            success: function (data) { 
                //var pqr = JSON.parse(data);
                if(data == "ok")
                {
                    Toast.fire({
                    icon: 'success',
                    title: '¡Pqr archivada con exito!'
                    }).then((result) => {
                        window.location.href='tablaPqrs.php?documento='+documento;
                    });
                }else if(data == "fail"){
                    Toast.fire({
                    icon: 'error',
                    title: '¡a ocurrido un error!'
                    }).then((result) => {
                        window.location.href='tablaPqrs.php?documento='+documento;
                    });
                    
                }
            } 
        });
    }

    function eliminarPqr(id,documento) {
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
            url: 'eliminarPqr.php',
            data: {
                id: id
            },  
            success: function (data) { 
                var pqr = JSON.parse(data);
                if(pqr == "ok")
                {
                    Toast.fire({
                    icon: 'success',
                    title: 'Pqr eliminado con exito!'
                    }).then((result) => {
                        window.location.href='tablaPqrs.php?documento='+documento;
                    });
                }
            } 
        });
    }
</script>