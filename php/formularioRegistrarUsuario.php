<?php 
//include "../php/session.php";
//include "../php/condicionMenu.php";
//include "../php/menuOpciones.php";?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRDhotel</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <script src="../js/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
  <header>
    <div class="logo">
      <img src="../img/logo_hotel.PNG" alt="Logo del hotel">
    </div>
    <h1>Bienvenido a CRD Hotel</h1>
  </header>
    <form method="post" class="container-fluid" action="insertaUsuario.php">
        <h3>Nuevo Usuario</h3>
    	<div class="mb-3 mt-4 row">
    		<label class="form-label col-sm-2">Nombre </label>
    		<div class="col-sm-4">
    			<input type="text" class="form-control" name="nombre">
    		</div>
    		<label class="form-label col-sm-2">Apellido </label>
    		<div class="col-sm-4">
    			<input type="text" class="form-control" name="apellido">
    		</div>
    	</div>
    	<div class="mb-3 row">
    		<label class="form-label col-sm-2">Tipo De Documento </label>
    		<div class="col-sm-4">
    			<select name="tdocumento" class="form-control">
    				<option value="">Seleccione..</option>
    				<option value="CC">Cédula Ciudadania</option>
    				<option value="CE">Cédula Extranjera</option>
    			</select>
    		</div>
    		<label class="form-label col-sm-2">Numéro De Documento </label>
    		<div class="col-sm-4">
    			<input type="text" class="form-control" name="numdoc" required>
    		</div>
    	</div>
		<div class="mb-3 row">
    		<label class="form-label col-sm-2">Teléfono </label>
    		<div class="col-sm-4">
    			<input type="text" class="form-control" name="telefono">
    		</div>
    		<label class="form-label col-sm-2">Correo </label>
    		<div class="col-sm-4">
    			<input type="text" class="form-control" name="correo">
    		</div>
    	</div>
    	<div class="mb-3 row">
    		<label class="form-label col-sm-2">Contraseña</label>
    		<div class="col-sm-4">
    			<input type="password" class="form-control" name="contasena">
    		</div>
    		<label class="form-label col-sm-2">Confirmar Contraseña</label>
    		<div class="col-sm-4">
    			<input type="text" class="form-control" name="conforcontra">
    		</div>
    	</div>

    	<input type="hidden" name="estadoUsuario" value="Activo">
        <!--El usu 2 hace referenca al rol de recepcionista-->
        <?php if(isset($_GET["usu"]) == 2){ ?>
    	   <input type="hidden" name="rol" value="2">
        <?php }else{ ?>
            <input type="hidden" name="rol" value="1">
        <?php }?>
    	<div>
    		<button name="enviaInfoRegistro" class="btn btn-success">Enviar</button>
            <a href="../php/formLogin.php" name="enviaInfoRegistro" class="btn btn-danger">Regresar</a>
    	</div>
    </form>
</body>
</html>

