<?php include "../php/session.php";?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRDhotel</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
  <header>
    <div class="logo">
      <img src="../img/logo_hotel.PNG" alt="Logo del hotel">
    </div>
    <h1>Bienvenido <?php  echo strtoupper($_SESSION["nombresUsuario"]); ?> a CRD Hotel</h1>
    <nav>
        <input type="button" value="Inicio" onclick="window.location.href='index.php'">
        <input type="button" value="Habitaciones" onclick="window.location.href='reserva.php'">
        <input type="button" value="Menú de comidas" onclick="window.location.href='menuCo.php'">
        <input type="button" value="¿Quienes somos?" onclick="window.location.href=''">
        <input type="button" value="Quejas o reclamos" onclick="window.location.href='formularioPqr.php'">
        <!--El rol 2 hace referenca al rol de recepcionista-->
        <?php if($_SESSION["rol"] == 2){ ?>
          <input type="button" value="Ingresar Nuevo recepcionista" onclick="window.location.href='formularioRegistrarUsuario.php?usu=2'">
        <?php } ?>
        <a  href="logout.php" class="btn btn-danger" alt="Cerrar sesión" data-toggle="tooltip" data-placement="top" title="Cerrar sesión">
        <i class="bi bi-box-arrow-right"></i>
        </a>
    </nav>
  </header>
  
  <main>
    <div class="banner">
      <img src="../img/vistainicio.jpg" alt="Imagen de fondo">
    </div>
  </main>
</body>
</html>