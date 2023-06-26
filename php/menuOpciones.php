<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

<header>
    <div class="logo">
      <img src="../img/logo_hotel.PNG" alt="Logo del hotel">
    </div>
    <h1>Bienvenido <?php  echo strtoupper($_SESSION["nombresUsuario"]); ?> a CRD Hotel</h1>
    <nav>
        <input type="button" value="Inicio" onclick="window.location.href='index.php'">
        <!-- <input type="button" value="Mis Reservas" onclick="window.location.href='consultarReserva.php'"> -->
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