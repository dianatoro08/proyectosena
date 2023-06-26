<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar reserva</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="logo">
            <img src="../img/logo_hotel.PNG" alt="Logo del hotel">
        </div>
        <h1>Consultar Reserva</h1>
    </header>

    <div class="container">
        <form method="post" action="acciones.php">
            <input type="hidden" name="accion" value="consultar">
            <div class="mb-3">
                <label for="numero-documento" class="form-label">Número de documento:</label>
                <input type="text" id="numero-documento" name="documento" class="form-control" required>
            </div>
            <button  class="btn btn-primary" >Consultar</button>
        </form>        
    </div>
</body>
</html>
