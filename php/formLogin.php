<?php
session_start();

?>
<!DOCTYPE html>
<meta charset="UTF-8">
<html>
    
<head>
	<title>CRD Hotel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="../css/login.css">
     
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="../img/logo_hotel.PNG" class="brand_logo" alt="Logo">
					</div>
				</div>
				
				<div class="d-flex justify-content-center form_container">
					<form method="post" action="">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="username" class="form-control input_user" placeholder="Usuario">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control input_pass" placeholder="Contraseña">
						</div>
						
						<div class="d-flex justify-content-center mt-3 login_container">
							<input type="submit" name="button" class="btn login_btn" value="Iniciar sesión">
						</div>
                        
					</form>
				</div>
                <center>
				<?php 
				include "../php/login.php";
				 ?>
				</center>
				
				
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						¿No tienes cuenta?<a href="../php/formularioRegistrarUsuario.php" class="ml-2">Registrate</a>
					</div>
					<div class="d-flex justify-content-center links">
						<a href="#">Olvidaste tu contraseña?</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
