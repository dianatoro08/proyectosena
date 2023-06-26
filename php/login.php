<?php
require_once "conexibd.php";

    if (!empty($_POST['button'])) {
  if (empty($_POST['username']) and empty($_POST['password'])) {
    echo "<div class='alert alert-danger'>Campos vacios</div>";
  }
  else
  {
      // Verifica si el formulario de inicio de sesión ha sido enviado
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Aquí deberías realizar la validación de las credenciales con la base de datos
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        // Prepara la consulta SQL para buscar al usuario en la base de datos
        $sql = "SELECT * FROM usuarios WHERE nombresUsuario = '$username'";
        $result = $conn->query($sql);
        
        // Verifica si se encontró un usuario con el nombre de usuario proporcionado
        if ($result->num_rows == 1) {
          $row = $result->fetch_assoc();
          
          // Verifica si la contraseña ingresada coincide con la contraseña almacenada en la base de datos
          if ($password == $row["passqordUsuario"]) {
            // Inicia una sesión y guarda la información del usuario
            $_SESSION["nombresUsuario"] = $username;
            $_SESSION["documento"]  = $row['documentoUsuario'];
            $_SESSION["rol"]  = $row['rol_idRol'];
            
            // Redirecciona al usuario a una página de inicio o panel de control
            header("Location: index.php");
            exit();
          } else {
            echo "<div class='alert alert-danger'>Credenciales inválidas</div>";
          }
        } else {
          echo "<div class='alert alert-danger'>Credenciales inválidas</div>";
        }
        
        $conn->close();
      }

  }
}
?>




